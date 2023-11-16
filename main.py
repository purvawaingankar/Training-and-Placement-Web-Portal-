import speech_recognition as sr
import requests
import json
import random
from flask import Flask, request, jsonify
from nltk.sentiment.vader import SentimentIntensityAnalyzer
import pyttsx3
from textblob import TextBlob
import pydub
import librosa
import numpy as np
from sklearn.cluster import KMeans

app = Flask(__name__)
sia = TextBlob("")

def speak(text):
    engine = pyttsx3.init()
    engine.say(text)
    engine.runAndWait()

def askQuestion():
    questions = [
        "What experience do you have in this field?",
        "What are your strengths and weaknesses?",
        "Why do you want to work for our company?",
        "What do you know about our company?",
        "Where do you see yourself in five years?",
        "What motivates you?",
        "What are your salary expectations?",
        "Do you have any questions for us?"
    ]
    question = random.choice(questions)
    speak(question)
    return question

# define a function to detect the number of speakers in an audio file
def detect_speakers(audio_file):
    # load the audio file using pydub
    sound = pydub.AudioSegment.from_file(audio_file)

    # convert the audio to a numpy array using librosa
    y, sr = librosa.load(audio_file)

    # compute the Short-Time Fourier Transform (STFT)
    D = librosa.stft(y)

    # compute the power spectrogram
    power = np.abs(D)**2

    # compute the mel-frequency spectrogram
    mel_spec = librosa.feature.melspectrogram(S=power)

    # compute the chroma features
    chroma = librosa.feature.chroma_stft(S=power)

    # concatenate the features into a single feature vector
    features = np.concatenate((mel_spec, chroma), axis=0)

    # cluster the feature vectors using k-means
    kmeans = KMeans(n_clusters=2, n_init=10, random_state=0).fit(features.T)
    #kmeans = KMeans(n_clusters=2, init='k-means++', max_iter=300, n_init=10, random_state=0)

    # return the number of clusters (i.e., the number of speakers)
    return len(set(kmeans.labels_))

@app.route('/recordAudio', methods=['POST'])
def recordAudio():
    r = sr.Recognizer()
    with sr.Microphone() as source:
        speak("Say something!")
        audio = r.listen(source)
    try:
        # save the audio to a file
        with open("audio.wav", "wb") as f:
            f.write(audio.get_wav_data())

        # detect the number of speakers in the audio
        num_speakers = detect_speakers("audio.wav")

        # check if more than one speaker is detected
        if num_speakers > 1:
            speak("Warning! More than one speaker detected.")

        # recognize the speech using Google Speech Recognition
        global response
        response = r.recognize_google(audio)
        speak("You said: " + response)
    except sr.UnknownValueError:
        speak("Google Speech Recognition could not understand audio")
    except sr.RequestError as e:
        speak("Could not request results from Google Speech Recognition service; {0}".format(e))
    return response

# Analyze response using TextBlob sentiment analyzer
@app.route('/analyzeResponse', methods=['POST'])
def analyzeResponse():
    # Use TextBlob to analyze the response
    sia_scores = TextBlob(response).sentiment.polarity
    # Generate feedback based on the analysis
    if sia_scores >= 0.5:
        speak("Great! Your response was very positive.")
    elif 0.5 > sia_scores > 0:
        speak("Your response was good.")
    elif sia_scores <= -0.5:
        speak("Oops! Your response was very negative.")
    else:
        speak("Your response was okay.")
    return jsonify({'status': 'success'})

# Get input from user through speech
def getInput():
    while True:
        response = recordAudio()
        if response is not None:
            return response

@app.route('/')
def index():
    return """
    <html>
    <head>
        <title>Mock interview</title>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins" , sans-serif;
        }
        body{
            min-height: 100vh;
            width: 100%;
            background: #eff992;
            display: flex;
            align-items: center;
            justify-content: center;
            }
        .container{
            width: 85%;
            background: #fff;
            border-radius: 6px;
            padding: 20px 60px 30px 40px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .container .content{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .button {
            display: inline-block;
            outline: 0;
            border: none;
            cursor: pointer;
            padding: 0 24px;
            border-radius: 50px;
            min-width: 200px;
            height: 50px;
            font-size: 18px;
            background-color: #eff992;
            font-weight: 500;
            color: #222;
        }

        .button:hover {background-color: #bdcd2b}

        .button:active {
            background-color: #bdcd2b;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            function askQuestion() {
                $.ajax({
                    type: "POST",
                    url: "/askQuestion",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (data) {
                        $('#speech').text(data.speech);
                    }
                });
            }

            function recordAudio() {
                $.ajax({
                    type: "POST",
                    url: "/recordAudio",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json"
                });
            }

            function analyzeResponse(response) {
                $.ajax({
                    type: "POST",
                    url: "/analyzeResponse",
                    data: {'response': response}
                });
            }
        </script>
    </head>
    <body>
    <div class="container">
    <center>
        <h1><i> Mock Interview</i></h1><br>
        <h4><i> Practice with AI Assistant </i></h4><br>
        <button class="button" onclick="askQuestion()">Ask Question</button><br><br>
        <p id="speech"></p><br>
        <button class="button" onclick="recordAudio()">Record Response</button><br><br>
        <p id="response"></p><br>
        <button class="button" onclick="analyzeResponse()">Feedback</button><br>
        <p id="speech2"></p><br>
        </center>
        </div>
    </body>
    </html>
    """

@app.route('/askQuestion', methods=['POST'])
def ask_question():
    question = askQuestion()
    data = {'speech': question}
    return jsonify(data)

if __name__ == '__main__':
    app.run(debug=True)




                
💼 Training and Placement Web Portal 🚀

⭐ Situation

Universities and organizations often face challenges in managing the recruitment process effectively, especially when dealing with a large number of applicants. 
There was a need for a streamlined platform to manage applicants, job postings, interviews, tests, and certifications. 
Additionally, applicants needed support to prepare for interviews and gain insights into their performance.

🎯 Task

The task was to create a web-based application that would:

Manage applicant data, job postings, interviews, and certifications.

Provide mock interview functionality to help applicants prepare.

Incorporate AI-driven analysis for feedback and sentiment analysis to improve applicant readiness and performance.

🛠️ Action

To build the portal, we have used a combination of technologies. The web portal itself was developed using Python, HTML, CSS, and PHP. We used XAMPP to set up the database with SQL. 
For the Virtual Assistant, I specifically worked on integrating several Python libraries and tools:

Speech Recognition: to capture the user’s responses during the mock interviews.

nltk or natural language toolkit (TextBlob) to give sentiment feedback.

Flask: for the web framework to deploy the assistant.

librosa: for speech diarization which is done using K-means algorithm so that only one person gives the answer.

Pydub: for working with .wav files and processing audio data.

I also implemented a feedback mechanism where the assistant provides speech-based responses to the candidate’s performance.


📊 Result
The portal significantly improved the recruitment process by:

Streamlining operations: Simplified the management of applicants and job listings.

Enhanced applicant readiness: The mock interviews, combined with sentiment analysis and feedback, helped applicants improve their responses and gain confidence.

The portal has become an essential tool for training, placement, and applicant management, benefiting both universities and recruiting companies. 🎓💼




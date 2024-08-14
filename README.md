# Patient-Health-Tracker
The Patient Health Tracker is a web-based application designed to streamline the management of patient and doctor information in a healthcare setting. Developed using modern web technologies, the application provides healthcare professionals with an intuitive interface to manage critical data efficiently and securely.
### Project Objectives
- __User Authentication:__ Ensure that only authorized personnel can access the system via a secure login mechanism.
- __Data Management:__ Allow the addition, viewing, and management of doctor and patient data within the system.
- __Administrative Efficiency:__ Improve the handling of healthcare data by providing a user-friendly platform for managing patient and doctor records.

### Project Structure
The application is divided into several key modules:

- __Login Page:__ Provides secure access to the system.
- __Doctor List Page:__ Displays a list of doctors with their respective specializations.
- __Patient List Page:__ Shows a list of patients, including their details and assigned doctors.
- __Add Doctor Form Page:__ Allows adding new doctors to the system.
- __Add Patient Form Page:__ Enables adding new patients to the system.
- __Dashboard Page:__ A central hub where authenticated users can navigate to different parts of the application.
- __Login Validation Script:__ Validates user input on the client-side before submitting forms.

### Installation
To run this project locally, follow these steps:

- __Clone the repository:__
 git clone https://github.com/your-username/patient-health-tracker.git
- __Navigate to the project directory:__
cd patient-health-tracker
- __Setup Database:__
    - Import the provided SQL file into your MySQL database.
    - Update the database connection details in the config.php file.
- __Run the application:__
    - Start your local server (e.g., using XAMPP or WAMP).
    - Access the application via http://localhost/patient-health-tracker.

### Usage
- __Login:__
    - Access the login page at http://localhost/patient-health-tracker/login.php.
    - Enter your credentials to proceed to the dashboard.

- __Dashboard:__
    - From the dashboard, you can add new doctors, add new patients, and view the lists of doctors and patients.
- __Adding a Doctor/Patient:__
    - Navigate to the respective forms via the dashboard to add new records.

### Screenshots
- __Login__
   -  ![Login](https://github.com/user-attachments/assets/f6a5b800-0a9f-4ce8-918c-43f6935712b5)
- __Dashboard__
    -  ![Dashboard](https://github.com/user-attachments/assets/80f3c63a-c823-4026-a3d7-6d8934505749)
- __Add Patient Form__
   -   ![AddPatientForm](https://github.com/user-attachments/assets/fbb64089-7bfe-4090-bfa5-6a0b7f8de86c)
- __Add Doctor Form__
     ![AddDoctorForm](https://github.com/user-attachments/assets/4f777e93-24c8-4475-a691-1dd17b40bab5)
_ __Patient List__
    -  ![PatientList](https://github.com/user-attachments/assets/13715240-da57-48ea-8753-d8ac801f7b65)
- __Doctor List__
    -  ![DoctorList](https://github.com/user-attachments/assets/51536959-282a-43ff-a651-6d44c5f3d23c)
### Conclusion

The "Patient Health Tracker" is a demonstration of how web technologies can be harnessed to improve the efficiency and security of healthcare administration. With its user-friendly design and robust functionality, this project serves as a valuable tool for healthcare professionals.

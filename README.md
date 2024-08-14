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
 ![login dashboard](https://github.com/user-attachments/assets/4428f87f-9d8c-46fb-99e7-2460d76f769c)
 
 ![AddForm](https://github.com/user-attachments/assets/4a3b6f14-72ae-42bc-9508-ee2db2840b4c)
 
 ![List](https://github.com/user-attachments/assets/95091f92-7421-4fb1-8505-39be924bc0d6)


### Conclusion

The "Patient Health Tracker" is a demonstration of how web technologies can be harnessed to improve the efficiency and security of healthcare administration. With its user-friendly design and robust functionality, this project serves as a valuable tool for healthcare professionals.

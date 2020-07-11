# NotificationApp
    Here, I created a NotificationApp in LARAVEL(PHP Framework)
 
    It has two roles Faculty role and Student role
 
 #FacultyLogin
 
        Work of a Faculty is to add New course and add new instruction to a particular class. In faculty login there are two option one is "Add course" and "Add instruction" where they can add courses and instruction. When the new course is added, a notification is send to all students those who are registerd in this app and when the instruction is added it also sent to the respective class students.
 
 #StudentLogin
 
        First they want to register the form. The form includes Name,DOB,Class,Father name,Mother name,email and they have to set a password
        Then,after loggedin they can view their details in My Profile option
 
        In Courses option, they can view the available courses which are added by Faculty
 
        In registration option, they can register a course which they want to study.A course can be registerd only once
 
        In Mycourse option, there are Two table one table has a courses which are registered but not completed.In another Table the courses that are completed once the course is registered and completed they cant able to registered again the same course There is a button in My courses page to complete the course.When the Student click that it goes to a another form where they want to give the subject code and Type COMPLETED to complete courses.Once he completed the course the notification is send to all studenst that "your friend <name> is completed the course <coursecode>"
    
    
        There is Notification bell icon where the notifications like friend completed a course,instruction from faculty,New course id added are present. Unreadnotification are displayed with gray background and readnotification are with white background.there is a "Mark all as read" optin when the student click that all unreadnotification become readed.There is a badge near the bell symbol it display the count of Unreadnotifications. 

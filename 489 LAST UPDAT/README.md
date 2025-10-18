# 💊 Pharmacy Management System

The **Pharmacy Management System** is a fully functional web application developed using **PHP** and **MySQL** to manage all daily operations inside a pharmacy, including medicine management, suppliers, staff, patients, invoices, sales, and stock control.

---

## 🧠 Project Idea

The goal of this project is to simplify and automate pharmacy operations through an easy-to-use interface that allows admins and staff to manage:
- Medicines and stock
- Supplier and customer information
- Sales and invoices
- User accounts (Admin, Staff, and User)

---

## 🛠️ Technologies Used

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP (pure PHP, no framework)  
- **Database:** MySQL  
  - Database file: `pharmacyq1.sql`

---

## 📂 Project Structure

### Main project directories:

-Information  
-List of invoices  
-Sales summary  
-Stock report  
-pharmacyq1.sql  

### 📁 Inside `Information/`

Contains all the core system files:
- Admin, Staff, Supplier, Patient, and Medicine management pages
- Display and listing pages
- Add, update, and delete operations
- Login and registration system
- Invoice, sales, and stock report pages
- Database connection files
- CSS and JavaScript files for design and functionality
- Image folder (`Images/`)

---

### 📁 Other folders

#### `List of invoices/`
Includes pages and styles for viewing and managing invoice lists.

#### `Sales summary/`
Contains pages for displaying sales summary reports.

#### `Stock report/`
Includes pages for viewing stock and inventory reports.

---

## 👥 User Roles

1. **Admin:**
   - Manage staff, suppliers, and patients.
   - View reports, sales, and stock data.
   - Edit or delete medicines and users.

2. **Staff:**
   - Register sales.
   - Add new patients or medicines (with limited access).

3. **User:**
   - View available medicines only.

---

## ⚙️ How to Run the Project

1. Make sure you have installed:
   - [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.wampserver.com/)

2. Place the project folder inside:
C:\xampp\htdocs\

3. Start **Apache** and **MySQL** from the XAMPP Control Panel.

4. Import the database:
- Open **phpMyAdmin**.
- Create a new database named `pharmacyq1`.
- Import the file `pharmacyq1.sql`.

5. Open your browser and go to:
http://localhost/Pharmacy_Management_System/Information/login-signin.html


---

## 📊 System Features

✅ Full management of medicines and stock  
✅ Generate and print invoices  
✅ View daily and monthly sales reports  
✅ Manage suppliers and patients  
✅ Multiple user roles (Admin, Staff, User)  
✅ Secure login and authentication system  
✅ User-friendly interface  

---

## 🧾 Database Structure

The database contains the following tables:
- `admin`
- `staff`
- `patient`
- `supplier`
- `medicine`
- `invoice`
- `sales`
- `stock`

---

## 🧑‍💻 Developer

This project was fully developed using **PHP** and **MySQL** as a university project for pharmacy management.  
It was built manually without any frameworks.

---

## 🏁 Conclusion

The **Pharmacy Management System** is a comprehensive web application that helps efficiently manage pharmacy operations, providing a clean and organized interface for all daily activities.

---

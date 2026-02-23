# 📚 Complete User Guide: Site Data Management System

Welcome to your new Site Data Management System! This guide is designed in simple language so anyone can understand how to operate it, what it does, and how things are organized.

---

## 🚀 How to Start Using the System

### 1. **Login as an Admin**
The system is protected, and only administrators can add or view data.
- **Go to:** `http://localhost:8000/admin` in your web browser.
- **Email:** `admin@admin.com`
- **Password:** `password`

*Once you're inside, you will see a clean left sidebar containing all the different modules. You should tackle them in the order listed below.*

### 2. **Step 1: Create Your Sites**
Before you can upload reports or pictures, the system needs to know *where* they belong.
- Click on **"Sites"** in the left menu.
- Click the button to create a new site.
- Fill in the required fields like "Site Name" (e.g., *Rajeshwar*). The address, city, state, etc., are optional.
- **Save it.** You can create as many unique sites as you need.

### 3. **Step 2: Create Your Years**
The system also needs to know the specific timeframe (the Year).
- Click on **"Years"** in the left menu.
- Create a new year by filling in the "Year Label" (e.g., *2023-24*).
- **Save it.** You only need to create a year label once—it will be reused everywhere.

### 4. **Step 3: Link Them Together (Site-Years)**
This is the **most important step.** You must connect a Site to a Year before uploading any files to it.
- Click on **"Site Years"** in the left menu.
- Click create.
- **Select your Site** from the dropdown menu (e.g., *Rajeshwar*).
- **Select your Year** from the dropdown menu (e.g., *2023-24*).
- **Save it.** Now the system knows: "We have an active connection for Rajeshwar in the year 2023-24."

### 5. **Step 4: Upload Your Files**
Now that the connection exists, you can upload your PDFs and Images!

- **Validation Reports:** Click "Validation Reports", choose the exact "Site - Year" combination from the dropdown, give the report a title, and upload a `.pdf` file. You can also add notes in the "Customer Feedback" area. You can only have ONE report per Site-Year combination.
- **Test Reports:** Click "Test Reports". This works exactly like Validation Reports, but you can upload as many test reports as you want to the same Site-Year combination. It also includes the "Customer Feedback" area to capture client notes.
- **Site Images:** Click "Site Images". Select your "Site - Year" combination, upload your picture (`.jpg` or `.png`), and add a small caption if you want. You can upload multiple images securely.

---

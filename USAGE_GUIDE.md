# RUPP Payment Portal - Usage Guide

## 🚀 Getting Started

### Running the Application

```bash
npm install
npm run dev
```

The application will start at `http://localhost:5173` (or the next available port).

---

## 📝 Demo Accounts

### Student Account

- **Email**: `student@rupp.edu.kh`
- **Password**: `student123`
- **Student ID**: `20230001`

### Admin Account

- **Email**: `admin@rupp.edu.kh`
- **Password**: `admin123`

---

## 👨‍🎓 Student Features

### 1. Login

1. Go to the **Login** page
2. Enter student credentials (see above)
3. Click **Sign In**
4. You'll be redirected to the Student Dashboard

### 2. View Dashboard

- See payment statistics:
  - **Total Paid**: Sum of all approved payments
  - **Pending**: Sum of payments awaiting approval
  - **Rejected**: Sum of rejected payments
- View all your submitted payments in a table with status badges

### 3. Submit a Payment

1. Click **Submit Payment** button in the dashboard
2. Fill in the payment form:
   - **Student ID**: Auto-filled from your account
   - **Full Name**: Auto-filled from your account
   - **Contact Number**: Your phone number
   - **Department**: Select your department
   - **Academic Year**: Select your year and semester
   - **Course Name**: Enter the course name
   - **Amount Paid**: Enter payment amount (e.g., 450.00)
   - **Transaction ID**: Optional transaction reference
   - **Payment Date**: Select payment date
   - **Receipt**: Upload your payment receipt (optional for demo)
3. Click **Submit Payment**
4. You'll be redirected back to your dashboard with the new payment showing as "Pending"

### 4. Track Payment Status

- **Pending** (Yellow): Waiting for admin approval
- **Approved** (Green): Payment has been verified and approved
- **Rejected** (Red): Payment was rejected by admin

---

## 👨‍💼 Admin Features

### 1. Login as Admin

1. Go to the **Login** page
2. Enter admin credentials (see above)
3. Click **Sign In**
4. You'll be redirected to the Admin Dashboard

### 2. View All Payments

- See overview statistics:
  - **Pending Approvals**: Number of payments waiting for review
  - **Total Revenue**: Sum of all payment amounts
  - **Rejected Requests**: Number of rejected payments
- View all student payments in a detailed table

### 3. Filter Payments

Use the status dropdown to filter by:

- **All Statuses**: Show all payments
- **Pending**: Only pending payments
- **Approved**: Only approved payments
- **Rejected**: Only rejected payments

### 4. Approve/Reject Payments

For any **Pending** payment:

1. Review the payment details (student info, amount, date, receipt)
2. Click **Approve** (green button) to approve the payment
3. Click **Reject** (red button) to reject the payment
4. The status updates immediately and is saved to localStorage

---

## 🔄 Testing the Full Workflow

### Complete Payment Submission Flow:

1. **Login as Student**:

   - Email: `student@rupp.edu.kh`
   - Password: `student123`

2. **Submit a New Payment**:

   - Click "Submit Payment"
   - Fill in the form (all required fields)
   - Click "Submit Payment" button
   - Note: Payment will show as "Pending" in your dashboard

3. **Logout**:

   - Click "Log Out" in the sidebar

4. **Login as Admin**:

   - Email: `admin@rupp.edu.kh`
   - Password: `admin123`

5. **Review and Approve**:

   - You'll see the new payment in the admin table
   - Click "Approve" to accept it

6. **Logout and Re-login as Student**:
   - The payment status will now show as "Approved" (green)
   - The "Total Paid" stat will be updated

---

## 💾 Data Persistence

All data is stored in **localStorage**, including:

- User accounts (student and admin)
- All payment submissions
- Payment status changes

**Note**: Clearing browser data will reset everything to demo data.

---

## 🎨 Features

### Authentication System

- ✅ Real login/logout functionality
- ✅ Role-based access (student/admin)
- ✅ Protected routes (redirects to login if not authenticated)
- ✅ Demo accounts for easy testing

### Student Portal

- ✅ Personal dashboard with payment stats
- ✅ Payment submission form with validation
- ✅ Payment history table
- ✅ Real-time status updates

### Admin Portal

- ✅ Overview statistics
- ✅ All payments view with filtering
- ✅ Approve/reject functionality
- ✅ Status-based payment filtering

### Data Management

- ✅ localStorage persistence
- ✅ Automatic data synchronization
- ✅ Initial demo data

---

## 🛠️ Technical Stack

- **Frontend**: React 18 + TypeScript
- **Styling**: Tailwind CSS
- **Routing**: React Router DOM v6
- **State Management**: React Context API
- **Data Storage**: localStorage
- **Icons**: Material Symbols Outlined
- **Build Tool**: Vite

---

## 📱 Pages

1. **Home** (`/`): Landing page
2. **About** (`/about`): Information about RUPP
3. **Login** (`/login`): Authentication page
4. **Student Dashboard** (`/student/dashboard`): Student view
5. **Payment Submission** (`/submit-payment`): Payment form
6. **Admin Dashboard** (`/admin/dashboard`): Admin view

---

## 🔐 Security Notes

**This is a demo application** for learning purposes:

- Passwords are stored in plain text
- No backend server or database
- All data is in browser localStorage
- Not suitable for production use

For a production application, you would need:

- Backend API with proper authentication
- Encrypted password storage
- Database for persistent data
- File upload handling
- Payment gateway integration
- Email notifications
- Audit logging

---

## 🐛 Troubleshooting

### Port Already in Use

If port 5173 is in use, Vite will automatically try the next available port (5174, 5175, etc.)

### Lost Data

If you clear browser data, all payments and accounts will reset to demo data. This is expected behavior with localStorage.

### Login Not Working

Make sure you're using the exact email and password from the demo accounts above.

---

## 📝 Need Help?

Demo accounts again for quick reference:

**Student**: `student@rupp.edu.kh` / `student123`  
**Admin**: `admin@rupp.edu.kh` / `admin123`

Happy testing! 🎉

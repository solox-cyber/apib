# **Public API - Public API Gopher**

## **📌 Project Overview**
This is a **public API** built with **Laravel** that provides basic information in JSON format. It is developed as part of **HNG12 Internship - Stage 0** and serves the following details when accessed via a `GET` request:

- **Your registered email address** (used to register on the HNG12 Slack workspace).
- **The current datetime** in ISO 8601 format.
- **The GitHub repository URL** of the project's codebase.

---

## **🚀 Features**
- A **RESTful API** that returns basic details.
- Uses **Laravel** as the backend framework.
- Follows **best practices** for API development.
- **CORS support** enabled for external access.

---

## **📂 Project Structure**
```
/app
   ├── Http
   │   ├── Controllers
   │   │   ├── Api
   │   │   │   ├── InfoController.php  # Handles the API response
/config
   ├── cors.php  # Configures CORS settings
/routes
   ├── api.php  # Defines API routes
/public
   ├── index.php  # Entry point for the API
README.md  # Documentation
```

---

## **⚙️ Setup Instructions**

### **1️⃣ Clone the Repository**
```sh
git clone https://github.com/Boluwatife01-bea/hng_gopher.git
cd your-repo
```

### **2️⃣ Install Dependencies**
Make sure **Composer** is installed, then run:
```sh
composer install
```

### **3️⃣ Configure Environment**
Duplicate `.env.example` and rename it to `.env`, then update necessary settings:
```sh
cp .env.example .env
```
Then generate an application key:
```sh
php artisan key:generate
```

### **4️⃣ Start the Laravel Development Server**
```sh
php artisan serve
```
Your API will be available at:
```
http://127.0.0.1:8000/api/info
```

---

## **📡 API Documentation**

### **🔹 Endpoint URL**
```sh
GET /api/info
```
- **Base URL:** `https://apigopher.olivesupermart.com.ng/api/info`

### **🔹 Request Format**
- **Method:** `GET`
- **Headers:** `Accept: application/json`
- **Authentication:** `None (Public API)`

### **🔹 JSON Response Format (200 OK)**
```json
{
  "email": "bolufunmiluyi@gmail.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/Boluwatife01-bea/hng_gopher"
}
```

---

## **🛠️ Example Usage**

### **Using cURL**
```sh
curl -X GET https://apigopher.olivesupermart.com.ng/api/info -H "Accept: application/json"
```

### **Using JavaScript Fetch**
```js
fetch('https://apigopher.olivesupermart.com.ng/api/info')
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.error('Error:', error));
```

### **Using Postman**
1. Open **Postman**.
2. Set the **Method** to `GET`.
3. Enter the **URL**: `https://apigopher.olivesupermart.com.ng/api/info`
4. Click **Send** and view the JSON response.

---

## **🔗 Useful Links**
- **GitHub Repository:** [your-repo](https://github.com/Boluwatife01-bea/hng_gopher)
- **HNG12 Internship:** [hng.tech](https://hng.tech)

---

## **👨‍💻 Hiring Developers?**
Looking for skilled developers? Check out:
- [Hire Python Developers](https://hng.tech/hire/python-developers)
- [Hire C# Developers](https://hng.tech/hire/csharp-developers)
- [Hire Golang Developers](https://hng.tech/hire/golang-developers)
- [Hire PHP Developers](https://hng.tech/hire/php-developers)
- [Hire Java Developers](https://hng.tech/hire/java-developers)
- [Hire Node.js Developers](https://hng.tech/hire/nodejs-developers)

---

## **📜 License**
This project is open-source and available under the **MIT License**.

---

This README provides **clear documentation**, making it easy for others to understand, set up, and use your API. Let me know if you need modifications! 🚀

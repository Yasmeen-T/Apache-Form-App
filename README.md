cat <<'EOF' > README.md
# 🧪 DevOps Project: Apache Form → JSON Storage (Dockerized)

This project demonstrates a full-stack containerized application using **Apache** and **PHP** to capture user input from a web form and store it in a persistent **JSON** file within a Docker container.

## 🚀 Features
- **Frontend:** HTML5 Form for capturing Name, Email, and Phone.
- **Backend:** PHP script for server-side logic and JSON data handling.
- **Containerization:** Fully Dockerized environment using the official `php:apache` image.
- **DevOps Best Practices:** Permission management and port mapping.

## 📂 Project Structure
- `index.html`: The user interface.
- `process.php`: The logic to parse and save data.
- `Dockerfile`: Instructions to build the environment.
- `data.json`: The storage file (initialized as an empty array).

## 🛠️ How to Run Locally

### 1. Build the Docker Image
```bash
docker build -t form-app .

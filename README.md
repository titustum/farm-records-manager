
# 🌾 Farm Records Management System (FRMS)

A digital platform for managing farm records — including crops, livestock, tools, sales, and expenses — with built-in insights for climate-smart agriculture and trade readiness.

Developed using **Laravel** and **FilamentPHP**, this system is designed for farmers, agricultural trainers, and students to help track farm performance, improve sustainability, and prepare for market access.

---

## 📘 Concept

The **Farm Records Management System (FRMS)** helps farmers record and analyze their day-to-day farming activities in a structured and simple way. It enables data-driven decisions that promote climate resilience, profitability, and sustainable agriculture.

---

## 🚀 Key Features

- 🐄 **Livestock Records**: Track animals, categories, expenses (e.g. feed, vet care), and sales.
- 🌾 **Crop Records**: Record crop types, expenses (e.g. seeds, fertilizers), and harvest sales.
- 📈 **Profit Tracking**: Visualize total sales, expenses, and net profit in real time.
- 📊 **Analytics Dashboard**: Compare sales vs expenses, view expense breakdowns by category.
- 🛠 **Tool Management**: Track farm tools and equipment.
- 🌦 **Climate Requirement Notes**: Add climate suitability notes per crop and animal category.
- 🔍 **Global Search**: Quickly find any record using the built-in search feature.
- 👤 **Role-based Access (optional)**: Can be extended to support farm workers, managers, etc.

---

## 🧰 Built With

- [Laravel 12+](https://laravel.com/)
- [FilamentPHP](https://filamentphp.com/)
- PHP 8.2+
- MySQL or SQLite
- TailwindCSS (via Filament)

---

## 🛠 Installation

```bash
# Clone the repository
git clone https://github.com/your-username/farm-records-manager.git
cd farm-records-manager

# Install dependencies
composer install
npm install && npm run build

# Setup environment
cp .env.example .env
php artisan key:generate

# Configure DB in .env file
# Then migrate
php artisan migrate

# (Optional) Seed demo data
php artisan db:seed

# Run the app
php artisan serve
````

---

## 👨‍🏫 Developed By

* **Trainer/Lead Developer**: Titus Kiptanui
* **Student Collaborator**: Grace M.
* **Institution**: Tetu Technical and Vocational College

---

## 📄 License

This project is for educational and demonstration purposes under a permissive license. Modify and reuse with attribution.
 

Let me know if you'd like:
- A **custom logo or banner** for the top of the README
- A **live demo video/gif badge**
- A **`db:seed` file** with demo animals/crops for exhibition use

Happy to help!

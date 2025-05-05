📊 Mira – AI-Powered Report Generator

Mira is a Laravel-based AI assistant that converts natural language prompts into optimized SQL queries using GPT-4. It executes these queries and displays the results in a dynamic, exportable DataTable UI. Mira simplifies report generation by enabling users to interact with their data through conversational language.

🚀 Key Features

🧠 AI-Powered Query Generation: Convert natural language to optimized SQL queries using GPT-4.

🔄 Real-Time Data Visualization: Dynamic results displayed in DataTables with pagination and sorting.

📁 Export Options: Easily export reports to CSV, Excel, and PDF formats.

📜 Schema-Aware: Generates queries based on the provided database schema for accurate results.

🌐 Multi-Language Script Support: Integrate with various backends (PHP, Python, Node.js) for seamless report generation in different environments.

📨 Prompt History: Keep track of past queries and results in a ChatGPT-style interface.

☁️ SaaS Integration: Ready for integration with external applications via API for large-scale deployment.


📦 Installation

Step-1: Update your Laravel App composer.json file with it:

"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/yourusername/kamran-mira"
    }
]

Step 2: Add Mira to your Laravel project:
"composer require kamran/mira:dev-master"

Step 3: Run the App and and test it by /mira to the url
Like: http://127.0.0.1:8000/mira


👨‍💻 Author

Md Kamran Hosan

📧 Email: mdkamranhosan98@gmail.com

🔗 LinkedIn: linkedin.com/in/md-kamran-hosan-693023261

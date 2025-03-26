from flask import Flask, jsonify
import mysql.connector

app = Flask(__name__)

# Koneksi ke MySQL (XAMPP)
db_config = {
    "host": "localhost",
    "user": "root",
    "password": "",
    "database": "booksdb"
}

@app.route('/')
def get_books():
    conn = mysql.connector.connect(**db_config)
    cursor = conn.cursor(dictionary=True)
    cursor.execute("SELECT * FROM books")
    books = cursor.fetchall()
    cursor.close()
    conn.close()
    return jsonify(books)

if __name__ == "__main__":
    app.run(port=5000)
import sqlite3

# Connect to the SQLite database
conn = sqlite3.connect('example.db')
c = conn.cursor()

# Insert a row of data
c.execute("INSERT INTO contacts (id,name, email) VALUES (?, ?, ?)", (12,'John Doe', 'john@example.com'))

# Commit the changes
conn.commit()

# Close the connection
conn.close()

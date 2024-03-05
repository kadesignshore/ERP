import sqlite3

# Connect to the SQLite database (create it if it doesn't exist)
conn = sqlite3.connect('example.db')

# Create a cursor object to execute SQL commands
cursor = conn.cursor()

# Define the SQL command to create the contacts table
create_table_query = '''
CREATE TABLE IF NOT EXISTS contacts (
    id INTEGER PRIMARY KEY,
    name TEXT,
    email TEXT
);
'''

# Execute the SQL command to create the table
cursor.execute(create_table_query)

# Commit the transaction (save the changes)
conn.commit()

# Close the connection
conn.close()

import os

virtual_env_path = os.getenv('VIRTUAL_ENV')

if virtual_env_path:
    print(f"Your Django project is using virtual environment located at: {virtual_env_path}")
else:
    print("No virtual environment is currently activated.")

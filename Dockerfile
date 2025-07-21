# Use a Python 3.4 + Apache base image  
FROM python:3.4-apache  

# Set working directory  
WORKDIR /app  

# Copy all files to the container  
COPY . .  

# Install required extensions (example: PostgreSQL & Redis)  
RUN apt-get update && apt-get install -y \  
    postgresql-client \  
    redis-server  

# Set file permissions (example)  
RUN chmod -R 755 /app  

# Start the server (example: running a Python script)  
CMD ["python", "your_script.py"]  

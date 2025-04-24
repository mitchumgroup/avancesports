#!/bin/bash

# Variables
DB_NAME="avancesports"
DB_USER="mitchumgroup"
DB_PASS="gambit8306"
DB_HOST="localhost"

# Output file
TIMESTAMP=$(date +"%Y%m%d_%H%M%S")
OUTPUT_FILE="db-backup-$TIMESTAMP.sql"

# Dump the database
mysqldump -u $DB_USER -p$DB_PASS -h $DB_HOST $DB_NAME > "$OUTPUT_FILE"

# Confirmation
echo "Database backup saved to $OUTPUT_FILE"

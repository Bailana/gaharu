# Laravel MongoDB Atlas Setup Guide

## Overview
This guide will help you connect your Laravel application to MongoDB Atlas cloud database.

## Prerequisites
- PHP 8.2 or higher
- Laravel 12.x
- MongoDB PHP Extension (ext-mongodb)

## Step 1: Install MongoDB PHP Extension

### Windows:
1. Download the MongoDB PHP extension from: https://pecl.php.net/package/mongodb
2. Add `extension=mongodb` to your php.ini file
3. Restart your web server

### Linux/Mac:
```bash
sudo pecl install mongodb
echo "extension=mongodb.so" >> /etc/php.ini
```

## Step 2: Setup MongoDB Atlas

1. Go to https://www.mongodb.com/cloud/atlas
2. Create a free account
3. Create a new cluster (choose free tier)
4. Configure network access:
   - Go to "Network Access" → "Add IP Address"
   - Add your current IP address or use 0.0.0.0/0 for development
5. Create database user:
   - Go to "Database Access" → "Add New Database User"
   - Create username and password
6. Get connection string:
   - Go to "Database" → "Connect" → "Connect your application"
   - Copy the connection string

## Step 3: Update Environment Variables

Update your `.env` file with MongoDB Atlas credentials:

```env
DB_CONNECTION=mongodb
MONGODB_URI=mongodb+srv://username:password@cluster.mongodb.net/database?retryWrites=true&w=majority
MONGODB_DATABASE=your_database_name
```

## Step 4: Test Connection

Create a test route to verify the connection:

```php
// routes/web.php
Route::get('/test-mongodb', function () {
    try {
        $client = new MongoDB\Client(env('MONGODB_URI'));
        $databases = $client->listDatabases();
        return response()->json(['databases' => iterator_to_array($databases)]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});
```

## Step 5: Create Sample Model

Create a sample model that uses MongoDB:

```php
// app/Models/Product.php
<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'products';
    
    protected $fillable = [
        'name',
        'price',
        'description',
        'category',
        'tags'
    ];
}
```

## Step 6: Create Migration (Optional)

MongoDB doesn't require migrations like SQL databases, but you can create collections programmatically:

```php
// database/seeders/DatabaseSeeder.php
public function run()
{
    // Create sample data
    \App\Models\Product::create([
        'name' => 'Sample Product',
        'price' => 99.99,
        'description' => 'This is a sample product',
        'category' => 'electronics',
        'tags' => ['new', 'featured']
    ]);
}
```

## Common Issues and Solutions

1. **Extension not found**: Install MongoDB PHP extension
2. **Connection timeout**: Check network access in MongoDB Atlas
3. **Authentication failed**: Verify username and password
4. **SSL certificate issue**: Add `ssl=true` to connection options

## Testing Commands

```bash
# Run Laravel development server
php artisan serve

# Test MongoDB connection
php artisan tinker
>>> $client = new MongoDB\Client(env('MONGODB_URI'));
>>> $client->listDatabases();
```

## Production Considerations

1. Use environment variables for sensitive data
2. Enable SSL/TLS encryption
3. Use connection pooling
4. Monitor database performance
5. Set up proper indexes

## Support

For issues with MongoDB Atlas, visit:
- https://docs.atlas.mongodb.com/
- https://www.mongodb.com/community/forums/

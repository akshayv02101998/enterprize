<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - E-Commerce</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        .profile-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            border: 4px solid white;
        }

        .profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-info {
            text-align: center;
            padding: 20px;
        }

        .profile-info h2 {
            margin-bottom: 10px;
            color: #333;
        }

        .profile-info p {
            color: #666;
            margin-bottom: 15px;
        }

        .profile-orders {
            padding: 20px;
        }

        .order-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .order-details {
            display: flex;
            justify-content: space-between;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <header>
        <h1>User Profile</h1>
    </header>

    <div class="profile-container">

        <div class="profile-header">
            <div class="profile-avatar">
                <img src="profile-picture.jpg" alt="User Avatar">
            </div>
            <h1>John Doe</h1>
            <p>john.doe@example.com</p>
        </div>

        <div class="profile-info">
            <h2>Profile Information</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget justo vel odio feugiat tristique.
                Maecenas vestibulum velit eu quam dapibus, vitae vestibulum libero tincidunt.</p>
        </div>

        <div class="profile-orders">
            <h2>Order History</h2>

            <div class="order-item">
                <div class="order-details">
                    <span>Order #12345</span>
                    <span>Date: 2022-02-08</span>
                </div>
                <p>Product: Example Product 1</p>
                <p>Total: $50.00</p>
            </div>

            <div class="order-item">
                <div class="order-details">
                    <span>Order #67890</span>
                    <span>Date: 2022-02-07</span>
                </div>
                <p>Product: Example Product 2</p>
                <p>Total: $30.00</p>
            </div>

        </div>

    </div>

    <footer>
        &copy; 2022 Your E-Commerce Website
    </footer>

</body>

</html>

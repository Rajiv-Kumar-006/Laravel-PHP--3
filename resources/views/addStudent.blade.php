<div class="main-container">

    <div class="message">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

    </div>

    <h1>Add New Student</h1>
    <div>
        <a href="/list">Watch added list of students</a>
    </div>

    <form action="add" method="post" class="form-container">
        @csrf
        <div class="name">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="enter your name">
        </div>
        <div class="rollno">
            <label for="rollno">Roll-No</label>
            <input type="text" name="rollno" id="rollno" placeholder="enter your rollno">
        </div>
        <div class="email">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="enter your email">
        </div>
        <div class="password">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="enter your password">
        </div>
        <button type="submit" class="submit-button">
            Submit
        </button>
    </form>


</div>


<style>
    body {
        background: linear-gradient(to right, #1e1e2f, #2c2c47);
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 40px;
        color: #fff;
    }

    h1 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 30px;
        background: linear-gradient(to right, #f5b041, #f1c40f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .form-container {
        max-width: 500px;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .form-container>div {
        margin-bottom: 18px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    label {
        width: 120px;
        font-weight: 600;
        font-size: 1rem;
        color: #f1f1f1;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        flex: 1;
        padding: 12px 15px;
        border: none;
        border-radius: 12px;
        font-size: 1rem;
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
        transition: all 0.3s ease;
        box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.2);
    }

    input:focus {
        outline: none;
        background-color: rgba(255, 255, 255, 0.15);
        box-shadow: 0 0 0 2px #f5b041;
    }

    .submit-button {
        width: 100%;
        background: linear-gradient(to right, #f5b041, #f1c40f);
        color: #1e1e2f;
        padding: 15px;
        border: none;
        border-radius: 12px;
        font-size: 1.1rem;
        font-weight: bold;
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .submit-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(245, 176, 65, 0.4);
    }

    .message {
        max-width: 600px;
        margin: 0 auto 30px auto;
        padding: 0 10px;
    }

    .alert {
        padding: 15px 20px;
        border-radius: 12px;
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 15px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        animation: fadeIn 0.5s ease;
    }

    .alert-success {
        background: rgba(245, 176, 65, 0.1);
        color: #f5b041;
        box-shadow: 0 0 10px rgba(245, 176, 65, 0.5);
    }

    .alert-danger {
        background: rgba(231, 76, 60, 0.1);
        color: #e74c3c;
        box-shadow: 0 0 10px rgba(231, 76, 60, 0.5);
    }

    div a {
        display: inline-block;
        padding: 12px 24px;
        background: linear-gradient(135deg, #f5b041, #f39c12);
        color: #1e1e2f;
        font-weight: bold;
        text-decoration: none;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        margin: 15px auto;
        text-align: center;
    }

    div a:hover {
        background: linear-gradient(135deg, #f1c40f, #e67e22);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        transform: translateY(-2px);
    }

    div {
        text-align: center;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-5px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 600px) {
        .form-container {
            padding: 30px;
        }

        h1 {
            font-size: 2rem;
        }

        .form-container>div {
            flex-direction: column;
            align-items: flex-start;
        }

        label {
            width: 100%;
        }

        input {
            width: 100%;
        }
    }
</style>


<script>
    // Auto-hide alerts after 5 seconds (5000ms)
    setTimeout(() => {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        });
    }, 3000);
</script>
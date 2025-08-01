<div class="edit-form-wrapper">
    <div class="form-card">
        <h2>Edit Student Details</h2>

        <form action="/update-student/{{$data->id}}" method="post">

            @csrf
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label for="name">👤 Name</label>
                <input type="text" name="name" value="{{ $data->name }}" id="name" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="rollno">🆔 Roll No.</label>
                <input type="text" name="rollno" value="{{ $data->rollno }}" id="rollno" placeholder="Enter your roll number">
            </div>

            <div class="form-group">
                <label for="email">📧 Email</label>
                <input type="email" name="email" value="{{ $data->email }}" id="email" placeholder="Enter your email">
            </div>

            <div class="form-actions">
                <button type="submit" class="submit-btn">🔄 Update</button>
                <a href="/list" class="cancel-link">❌ Cancel</a>
            </div>
        </form>
    </div>
</div>

<style>
    body {
        background: linear-gradient(to right, #c9d6ff, #e2e2e2);
        font-family: 'Poppins', sans-serif;
    }

    .edit-form-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        padding: 30px;
    }

    .form-card {
        background: rgba(255, 255, 255, 0.25);
        backdrop-filter: blur(16px);
        border-radius: 20px;
        padding: 40px 50px;
        width: 100%;
        max-width: 500px;
        box-shadow: 0 8px 32px rgba(31, 38, 135, 0.2);
        animation: fadeIn 1s ease-in-out;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .form-card h2 {
        text-align: center;
        color: #333;
        font-size: 26px;
        margin-bottom: 25px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 600;
        font-size: 14px;
    }

    .form-group input {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-size: 15px;
        transition: all 0.3s ease;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .form-group input:focus {
        outline: none;
        border-color: #4e91fc;
        box-shadow: 0 0 8px rgba(78, 145, 252, 0.3);
    }

    .form-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 30px;
    }

    .submit-btn {
        background: #4e91fc;
        color: #fff;
        padding: 12px 24px;
        border: none;
        font-size: 15px;
        border-radius: 10px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .submit-btn:hover {
        background: #306bce;
    }

    .cancel-link {
        text-decoration: none;
        font-size: 14px;
        color: #888;
        transition: color 0.3s;
    }

    .cancel-link:hover {
        color: #111;
    }

    @keyframes fadeIn {
        from {
            transform: translateY(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>

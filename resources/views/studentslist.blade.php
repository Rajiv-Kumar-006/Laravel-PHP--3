<div>

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


    <h1>List of Students</h1>
    <table border="2">
        <tr>
            <td>Name</td>
            <td>Rollno</td>
            <td>Email</td>
            <td>CreatedAt</td>
            <td>Operation</td>
        </tr>
        @foreach($students as $student)
        <tr>
            <td> {{$student->name}} </td>
            <td> {{$student->rollno}} </td>
            <td> {{$student->email}} </td>
            <td> {{$student->created_at}} </td>
            <td> 
                <a href="{{'delete/'. $student->id}}">Delete</a> 
                <a href="{{'edit/'. $student->id}}">Edit</a> 
            </td>
        </tr>
        @endforeach
    </table>
</div>
<style>
    body {
        background: linear-gradient(to right, #1e1e2f, #2c2c47);
        font-family: 'Poppins', sans-serif;
        color: #fff;
        padding: 40px;
    }

    h1 {
        text-align: center;
        font-size: 2.2rem;
        margin-bottom: 30px;
        background: linear-gradient(to right, #f5b041, #f1c40f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    a {
        display: inline-block;
        padding: 8px 20px;
        background: linear-gradient(135deg, #f5b041, #f39c12);
        color: #1e1e2f;
        font-weight: bold;
        text-decoration: none;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        /* margin: 15px auto; */
        text-align: center;
    }

    table {
        width: 90%;
        margin: 0 auto;
        border-collapse: separate;
        border-spacing: 0;
        background-color: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    table th,
    table td {
        padding: 15px 20px;
        text-align: left;
    }

    table tr:first-child {
        background: linear-gradient(to right, #f5b041, #f1c40f);
        color: #1e1e2f;
        font-weight: bold;
    }

    table tr:not(:first-child):hover {
        background-color: rgba(255, 255, 255, 0.08);
        transition: background 0.3s ease;
    }

    table td {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    @media (max-width: 768px) {
        table {
            width: 100%;
            font-size: 0.9rem;
        }

        table th,
        table td {
            padding: 10px 12px;
        }
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
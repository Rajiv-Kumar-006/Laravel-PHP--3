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
    <div style="margin-bottom: 10px; width: auto; text-align: center">
        <a href="/add">Add New Students</a>
    </div>

    <form action="search" method="get">
        <input type="text" name="search" placeholder="search student by name..." value="{{@$search}}">
        <button>
            Search
        </button>
    </form>

    <form action="delete-multi" method="post" class="table">
        @csrf
        <button class="submit">Delete</button>
        <table border="2">
            <tr>
                <td>Select</td>
                <td>Name</td>
                <td>Rollno</td>
                <td>Email</td>
                <td>CreatedAt</td>
                <td>Operation</td>
            </tr>
            @foreach($students as $student)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{$student->id}}"> </td>
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
    </form>

    <div class="paginate">
        {{$students->links()}}
    </div>

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
        margin-bottom: 20px;
        background: linear-gradient(to right, #f5b041, #f1c40f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
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
        padding: 8px 20px;
        background: linear-gradient(135deg, #f5b041, #f39c12);
        color: #1e1e2f;
        font-weight: bold;
        text-decoration: none;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        text-align: center;
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin: 30px auto;
        width: 90%;
        padding: 10px 20px;
        /* background: rgba(255, 255, 255, 0.08); */
        border-radius: 12px;
        /* backdrop-filter: blur(10px); */
        /* box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); */
    }

    input[type="text"] {
        flex: 1;
        padding: 12px 16px;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
        box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
    }

    input[type="text"]::placeholder {
        color: #ddd;
    }

    input[type="text"]:focus {
        outline: none;
        background-color: rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 0 2px #f5b041;
    }

    button {
        background: linear-gradient(to right, #f5b041, #f1c40f);
        color: #1e1e2f;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(245, 176, 65, 0.4);
    }

    /* FORM > TABLE STYLING */
    form.table>table {
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

    form.table>table th,
    form.table>table td {
        padding: 15px 20px;
        text-align: left;
    }

    form.table>table th:first-child {
        border-top-left-radius: 10px;
    }

    form.table>table th:last-child {
        border-top-right-radius: 10px;
    }

    form.table>table tr:first-child {
        background: linear-gradient(to right, #f5b041, #f1c40f);
        color: #1e1e2f;
        font-weight: bold;
    }

    form.table>table tr:not(:first-child):hover {
        background-color: rgba(255, 255, 255, 0.08);
        transition: background 0.3s ease;
    }

    form.table>table td {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* Operation column layout */
    form.table td:last-child {
        display: flex;
        gap: 10px;
        flex-direction: row;
        justify-content: center;
    }

    form.table td:last-child a {
        padding: 6px 12px;
        font-size: 0.9rem;
        border-radius: 8px;
        background: linear-gradient(to right, #f39c12, #f5b041);
        color: #1e1e2f;
        font-weight: bold;
        text-decoration: none;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    form.table td:last-child a:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(255, 215, 0, 0.3);
    }

    .paginate {
        margin: auto;
        margin-top: 20px;
        text-align: center;
    }

    .w-5.h-5 {
        width: 20px;
        height: 20px;
        display: inline-block;
        fill: currentColor;
        vertical-align: middle;
        cursor: pointer;
        margin: auto;
        text-align: center;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        form.table>table {
            width: 100%;
            font-size: 0.9rem;
        }

        form.table>table th,
        form.table>table td {
            padding: 8px 10px;
            font-size: 0.85rem;
        }

        form.table td:last-child {
            flex-direction: column;
        }

        form.table td:last-child a {
            width: 100%;
            text-align: center;
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
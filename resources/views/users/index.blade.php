<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center text-primary mb-4">Users</h1>
        
        <!-- Search Bar -->
        <div class="mb-4">
            <input type="text" id="search" class="form-control" placeholder="Search by name, department, or designation">
        </div>
        
        <!-- Users Cards -->
        <div class="row" id="userCards">
            @foreach($users as $user)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $user->designation->name }}</h6>
                        <p class="card-text"><strong>Phone:</strong> {{ $user->phone_number }}</p>
                        <p class="card-text"><strong>Department:</strong> {{ $user->department->name }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        $('#search').on('keyup', function() {
            let query = $(this).val();
            $.ajax({
                url: "{{ route('search') }}",
                data: { query },
                success: function(data) {
                    let cards = '';
                    data.forEach(user => {
                        cards += `<div class="col-md-4 mb-4">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title">${user.name}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">${user.designation.name}</h6>
                                            <p class="card-text"><strong>Phone:</strong> ${user.phone_number}</p>
                                            <p class="card-text"><strong>Department:</strong> ${user.department.name}</p>
                                        </div>
                                    </div>
                                  </div>`;
                    });
                    $('#userCards').html(cards);
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

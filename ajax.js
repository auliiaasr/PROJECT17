$(document).ready(function() {
    loadData();

    // Read Ajax
    function loadData() {
        $.ajax({
            type: 'GET',
            url: 'read.php',
            success: function(data) {
                $('#content').html(data);
            }
        });
    }

    // Search Ajax
    $('#search').on('keyup', function() {
        $.ajax({
            type: 'POST',
            url: 'search.php',
            data: {
                search: $(this).val()
            },
            cache: false,
            success: function(data) {
                $('#content').html(data);
            }
        });
    });

    // Filter Ajax
    $('#filter').on('change', function() {
        $.ajax({
            type: 'POST',
            url: 'filter.php',
            data: {
                filter: parseInt($(this).val())
            },
            cache: false,
            success: function(data) {
                $('#content').html(data);
            }
        });
    });

    // Sort Ajax
    $('#sort').on('change', function() {
        $.ajax({
            type: 'POST',
            url: 'sort.php',
            data: {
                sort: $(this).val()
            },
            cache: false,
            success: function(data) {
                $('#content').html(data);
            }
        });
    });

    // Detail Ajax
    $(document).on('click', '#detail', function() {
        $.ajax({
            type: 'POST',
            url: 'detail.php',
            data: {
                id: $(this).attr('value'),
            },
            cache: false,
            success: function(data) {
                $('#create').html('<i class="fas fa-circle-left me-1"></i> Kembali');
                $('#create').attr('class', 'btn btn-secondary px-4');
                $('#create').attr('id', 'back');
                $('#container').html(data);
            }
        });
    });

    // Create Ajax
    $(document).on('click', '#create', function() {
        $.ajax({
            type: 'POST',
            url: 'create.php',
            cache: false,
            success: function(data) {
                $('#create').html('<i class="fas fa-circle-left me-1"></i> Kembali');
                $('#create').attr('class', 'btn btn-secondary px-4');
                $('#create').attr('id', 'back');
                $('#container').html(data);
            }
        });
    });
    
    // Store Ajax
    $(document).on('submit', '#formCreate', function() {
        $.ajax({
            type: 'POST',
            url: 'store.php',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                alert(data);
            }
        });
    });

    // Edit Ajax
    $(document).on('click', '#edit', function() {
        $.ajax({
            type: 'POST',
            url: 'edit.php',
            data: {
                id: $(this).attr('value'),
            },
            cache: false,
            success: function(data) {
                $('#create').html('<i class="fas fa-circle-left me-1"></i> Kembali');
                $('#create').attr('class', 'btn btn-secondary px-4');
                $('#create').attr('id', 'back');
                $('#container').html(data);
            }
        });
    });
    
    // Update Ajax
    $(document).on('submit', '#formEdit', function() {
        $.ajax({
            type: 'POST',
            url: 'update.php',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                alert(data);
            }
        });
    });

    // Delete Ajax
    $(document).on('click', '#delete', function() {
        let confirmed = confirm("Yakin ingin menghapus?");
        if (confirmed) {
            $.ajax({
                type: 'POST',
                url: 'delete.php',
                data: {
                    id: $(this).attr('value'),
                },
                cache: false,
                success: function(data) {
                    loadData();
                }
            });
        }
    });

    // Back Ajax
    $(document).on('click', '#back', function() {
        $.ajax({
            type: 'POST',
            url: 'index.php',
            cache: false,
            success: function(data) {
                $('#back').html('<i class="fas fa-plus-circle me-1"></i> Tambah');
                $('#back').attr('class', 'btn btn-primary px-4');
                $('#back').attr('id', 'create');
                window.location.reload();
            }
        });
    });
});
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
{{-- <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script> --}}

<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Create Help and Support</h5>
    </div>
    <div class="card-body">
        <form id="myForm" method="POST">
            @csrf <!-- CSRF token for Laravel -->
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="inputTitle">Title</label>
                    <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Title"
                        required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="inputSubtitle">Sub title</label>
                    <input type="text" class="form-control" id="sub_title" name="sub_title"
                        placeholder="Sub title" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="inputSection">Section</label>
                <select name="section" id="inputSection" class="form-control" required>
                    <option value="">choose....</option>
                    <option value="section1">Section 1</option>
                    <option value="section2">Section 2</option>
                    <option value="section3">Section 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="editor">Body</label>
                <textarea class="form-control" id="editor" name="body" placeholder="Page content" required></textarea>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city" required>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" name="state" class="form-control" required>
                        <option selected>Choose...</option>
                        <option value="state1">State 1</option>
                        <option value="state2">State 2</option>
                        <option value="state3">State 3</option>
                    </select>
                </div>
                <div class="mb-3 col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="zip" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        <div id="response" class="mt-3"></div> <!-- Response message will be displayed here -->

    </div>
</div>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        CKEDITOR
            .replace(document.querySelector('#editor'), {
                versionCheck: false
            })
    });
</script>
<script>
    $(document).ready(function() {
        $('#myForm').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            $.ajax({
                url: "{{ url('help-support-store') }}", // Change this to your route
                type: 'POST',
                data: $(this).serialize(), // Serialize form data
                success: function(response) {
                    $('#response').html(
                        '<div class="alert alert-success">Form submitted successfully!</div>'
                        );
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    var errorMsg = '<div class="alert alert-danger"><ul>';
                    $.each(errors, function(key, value) {
                        errorMsg += '<li>' + value[0] +
                        '</li>'; // Show only the first error
                    });
                    errorMsg += '</ul></div>';
                    $('#response').html(errorMsg);
                }
            });
        });
    });
</script>

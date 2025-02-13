<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Selection Form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container {
            max-width: 500px;
            min-width: 370px;
            padding: 20px 20px 40px 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
        }

        .btn-submit {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-submit:hover {
            background-color: #138496;
            border-color: #117a8b;
        }

        select.form-select,
        .select2-container .select2-selection--single {
            height: 45px !important;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            line-height: 43px !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .select2-container .select2-selection--single .select2-selection__arrow {
            height: 43px !important;
        }

        .select2-container--default .select2-selection--single {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2 class="mb-4 text-center">School Selection</h2>
            <form action="<?= base_url('users/simpanSekolah') ?>" method="post">
                <div class="mb-4">
                    <label for="id_sekolah" class="form-label">Choose School</label>
                    <select name="id_sekolah" id="id_sekolah" class="form-select" required>
                        <option value="">Select a school</option>
                        <?php
                        if (isset($sekolah_options) && is_array($sekolah_options)) {
                            foreach ($sekolah_options as $value => $label) {
                                echo '<option value="' . htmlspecialchars($value) . '"' .
                                    (set_value('id_sekolah') == $value ? ' selected' : '') . '>' .
                                    htmlspecialchars($label) . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" name="save" class="btn btn-submit text-white">Submit</button>
                    <a href="<?= base_url('logout') ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#id_sekolah').select2({
                placeholder: "Select a school",
                allowClear: true
            });
        });
    </script>
</body>

</html>
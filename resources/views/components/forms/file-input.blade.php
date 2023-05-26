<div class="row mb-3 {{ $errors->has($name) ? 'has-danger' : '' }} {{ $col ?? null }}">
    <div class="col-md-3 text-left">
        <label for="{{ $id }}">
            {!! __($label) !!}
            @if (empty($required) || strtolower($required) == 'no')
            @else
                <span class='text-danger'>*</span>
            @endif
        </label>
    </div>
    <div class="col-md-4">
        <div
            class="file-selection-wrapper file-selection-wrapper-{{ $id }} {{ $errors->has($name) ? 'is-invalid' : '' }}">
        </div>
        <div class="col-md-12 validation-msg"></div>
        {!! $errors->first($name, '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

 {{-- add parent  --}}
    <script type="text/javascript">
        var CustomFile = (function(inputName, idAttr, uploadableFileCount, fileType, disabled) {

            var shouldDisplayButton = true;
            var wrapperDiv = '.file-selection-wrapper-' + idAttr;
            var customFileWrapper = '.custom-file-wrapper-' + idAttr;
            var addButton = 'addButton' + idAttr;
            var removeButton = 'removeButton' + idAttr;

            var fileTypeIcon = '<i class="fa-solid fa-file"></i>';
            if (fileType === 'pdf') {
                fileTypeIcon = '<i class="fa-solid fa-file-pdf"></i>';
            } else if (fileType === 'video') {
                fileTypeIcon = '<i class="fa-solid fa-video"></i>';
            } else if (fileType === 'excel') {
                fileTypeIcon = '<i class="fa-solid fa-file-excel"></i>';
            } else if (fileType === 'docx') {
                fileTypeIcon = '<i class="fa-solid fa-file-word"></i>';
            } else if (fileType === 'image') {
                fileTypeIcon = '<i class="fa-solid fa-image"></i>';
            }

            function fileTemplate(inputName, index, customFileWrapperCount, disabled) {

                var actioButtons = shouldDisplayButton ?
                    '<div style="width: 100%;height: 25px;background: #;text-align: right;display: nsone;padding-right: 10px;padding-top: 3px;">' +
                    '<span index-id="' + index +
                    '" style="line-height: 16px;font-size: 14px;padding: 4px 10px;background: darkred;color: #fff;cursor: pointer;border-radius: 10%;" id="' +
                    removeButton + '">-</span>' +
                    '<span index-id="' + index +
                    '" style="margin-left: 2px;line-height: 16px;font-size: 14px;padding: 4px 8px;background: darkgreen;color: #fff;cursor: pointer;border-radius: 10%;" id="' +
                    addButton + '">+</span>' +
                    '</div>' : '';

                return '<div style="margin-bottom: 10px;display: block;" class="custom-file-wrapper-' + idAttr +
                    '" wrap-id="' + idAttr + index + '">' +
                    '<div style="width: calc( 100% - 2px );height: 35px;background: #ced4da;padding:1px;border-top-right-radius: 2px;border-bottom-right-radius: 2px;border-top-left-radius: 2px;border-bottom-left-radius: 2px;">' +
                    '<input type="file" style="opacity: 0;z-index: 3;position: absolute;cursor: pointer;"' +
                    disabled + '/>' +
                    '<div style="width: 32px;height: 33px;border-right:1px #ced4da solid;background-color: #f5f5f5;float: left;border-top-left-radius: 2px;border-bottom-left-radius: 2px;padding-top: 6px;padding-left: 10px;">' +
                    fileTypeIcon + '</div>' +
                    '<div style="width: calc( 100% - 140px);height: 33px;background-color: #f5f5f5;overflow:hidden;float: left;text-align: left;text-indent: 5px;">' +
                    '<span style="line-height: 33px;overflow-wrap: break-word;overflow:hidden;background-color: #f5f5f5;" class="file-label-wrapper">No Selected File</span>' +
                    '</div>' +
                    '<div style="width: 108px;height: 33px;padding-top: 1px;background-color: #f5f5f5;float: left;border-left: 1px solid #ced4da;border-right: 1px solid #ced4da;">' +
                    '<span style="line-height: 33px;z-index: 1;position: absolute;text-indent: 30px;cursor: pointer;">Browse</span>' +
                    '<input type="file" id="' + idAttr + '" name="' + inputName +
                    '" attr="drug-file-input" style="opacity: 0;width: 100%;height: 100%;z-index: 3;position: relative;cursor: pointer;"' +
                    disabled + ' />' +
                    '</div>' +
                    // '<div style="width: 100px;height: 33px;background-color: #f5f5f5;float: left;border-top-right-radius: 2px;border-bottom-right-radius: 2px;">'+
                    // '<span id="deleteFile" style="line-height: 33px;font-size: 12px;background-color: #;cursor: pointer;padding: 3px 6px;color: red;">Delete</span>'+
                    // '<span id="viewFile" style="line-height: 33px;font-size: 12px;background-color: #;cursor: pointer;padding: 3px 6px;color: green;">View</span>'+
                    // '</div>'+
                    '</div>' + actioButtons +
                    '</div>';

            }

            $(document).on("change", 'input[attr="drug-file-input"]', function(e) {
                var fileName = $(this).val();
                fileName = fileName.replace(/^.*[\\\/]/, '')
                let length = $(this).length;
                $(this).parents(customFileWrapper).find('.file-label-wrapper').html(fileName);
            });

            var initialCount = 1;

            $(document).on("click", '#' + removeButton, function(e) {
                e.preventDefault();
                if ($(document).find(customFileWrapper).length > 1) {
                    var indexId = idAttr + $(this).attr('index-id');
                    $(document).find('div[wrap-id="' + indexId + '"]').remove();
                } else {
                    $(customFileWrapper).find('.file-label-wrapper').html('No Selected File');
                    $(customFileWrapper).find('input[attr="drug-file-input"]').val('');
                }
            });

            $(document).on("click", '#' + addButton, function(e) {
                e.preventDefault();
                initialCount = initialCount + 1;
                displayFile();
            });

            function displayFile() {
                var customFileWrapperCount = $(document).find(customFileWrapper).length;

                if (customFileWrapperCount < uploadableFileCount) {
                    for (let index = initialCount; index <= initialCount; index++) {
                        $(document).find(wrapperDiv).append(fileTemplate(inputName, index, customFileWrapperCount,
                            disabled));
                    }
                } else {
                    console.log("Only " + uploadableFileCount + " File(s) are allowed.", 'error')
                    // ElementHelpers.customToastr("Only " + uploadableFileCount + " File(s) are allowed.", 'error');
                }
            }
            displayFile();
            return;
        });

        CustomFile('{{ $name }}', '{{ $id }}', '{{ $uploadableFileCount }}',
            "{{ strtolower($fileType) }}", "{{ strtolower($disabled) }}");
    </script>

    <style>
        {
            color: red;
        }

        .file-selection-wrapper {
            width: 100%;
        }

        @media (max-width: 650px) {
            .file-selection-wrapper {
                width: 100%;
            }
        }
    </style>


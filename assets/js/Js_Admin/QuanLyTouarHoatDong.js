// Thêm Toaur Mới Js
            const dropzone = document.getElementById('dropzone');
            const fileInput = document.getElementById('file-input');
            const showBtn = document.querySelector('.btn-show');
            const deleteBtn = document.querySelector('.btn-delete');
            const saveBtn = document.querySelector('.btn-primary');
            const imagepreviews = document.querySelector('.imagepreviews');
            // Bắt sự kiện click vào dropzone để mở hộp thoại chọn file
            if (dropzone || fileInput || imagepreviews || showBtn || deleteBtn || saveBtn) {
                // dropzone.addEventListener('click', () => {
                // fileInput.click();
                // });
                fileInput.addEventListener('change', function() {
                                    const file = this.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = (e) => {
                                            // Hiển thị preview ngay
                                            imagepreviews.src = e.target.result;
                                        };
                                        reader.readAsDataURL(file);
                                    }
                                })
                // Bắt sự kiện kéo/thả file vào dropzone
                dropzone.addEventListener('dragover', (e) => {
                    e.preventDefault();
                    dropzone.style.borderColor = '#007bff';
                    dropzone.style.backgroundColor = '#f1f7ff';
                });

                dropzone.addEventListener('dragleave', (e) => {
                    e.preventDefault();
                    dropzone.style.borderColor = '#ced4da';
                    dropzone.style.backgroundColor = '#fff';
                });

                dropzone.addEventListener('drop', (e) => {
                    e.preventDefault();
                    dropzone.style.borderColor = '#ced4da';
                    dropzone.style.backgroundColor = '#fff';

                    const files = e.dataTransfer.files;
                    if (files.length > 0) {
                        // Xử lý file được thả vào đây
                        console.log('File đã được thả:', files[0].name);
                        alert(`File "${files[0].name}" đã được tải lên.`);
                    }
                });

                // Bắt sự kiện khi file được chọn qua input
                fileInput.addEventListener('change', (e) => {
                    const files = e.target.files;
                    if (files.length > 0) {
                        console.log('File đã được chọn:', files[0].name);
                        alert(`File "${files[0].name}" đã được tải lên.`);
                    }
                });

                // Sự kiện cho các nút chức năng
                showBtn.addEventListener('click', () => {
                    alert('Chức năng "Show" đã được click!');
                });

                deleteBtn.addEventListener('click', () => {
                    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')) {
                        alert('Chức năng "Delete" đã được click!');
                    }
                });

                saveBtn.addEventListener('click', (e) => {
                    e.preventDefault(); // Ngăn chặn form submit mặc định
                    alert('Chức năng "Save" đã được click!');
                    // Thêm logic xử lý form ở đây
                });
            }

        //  kiem tra time_days

        // console.log(time_days.value);

    const time_days = document.getElementById('time_days');
    const soluong_people = document.getElementById('soluong_people');
    const price = document.getElementById('price');

    const errortime_days = document.getElementById('errortime_days');
    const errorsoluong_people = document.getElementById('errorsoluong_people');
    const errorprice = document.getElementById('errorprice');

    if (time_days) {
        time_days.addEventListener('change', function() {
            const value = parseInt(time_days.value, 10);
            if (value > 8 || value < 0) {
                errortime_days.textContent = 'Xin Mời Nhập dưới 8 ngày Lớn Hơn 0';
                errortime_days.style.display = 'block';
                return;
            }
            errortime_days.textContent = '';
            errortime_days.style.display = 'none';
        });
    }

    if (soluong_people) {
        soluong_people.addEventListener('change', function() {
            const value = parseInt(soluong_people.value, 10);
            if (value >= 4 || value < 0) {
                errorsoluong_people.textContent = 'Xin Mời Nhập Số Người Dưới 4 Lớn Hơn 0';
                errorsoluong_people.style.display = 'block';
                return;
            }
            errorsoluong_people.textContent = '';
            errorsoluong_people.style.display = 'none';
        });
    }

    if (price) {
        price.addEventListener('change', function() {
            const value = parseInt(price.value, 10);
            if (value > 19999999 || value < 0) {
                errorprice.textContent = 'Xin Mời Nhập Price Dưới 19999999 VND Lớn Hơn 0';
                errorprice.style.display = 'block';
                return;
            }
            errorprice.textContent = '';
            errorprice.style.display = 'none';
        });
    }

// các nút trang Showtouar
// JavaScript có thể được thêm vào đây nếu cần các chức năng động
        document.addEventListener('DOMContentLoaded', function() {
            const editButton = document.querySelector('.btn-edit');
            const deleteButton = document.querySelector('.btn-delete');

            if (editButton) {
                editButton.addEventListener('click', function(e) {
                alert('Bạn muốn chỉnh sửa trang này ');
            });
            }

            if (deleteButton) {
                deleteButton.addEventListener('click', function(e) {
                const confirmed = confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');
                if (confirmed) {
                    alert('Sản phẩm đã được xóa.');
                }
            });
            }
        });


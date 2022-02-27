<div id="create">
             
                <button id="create-button" onclick="document.getElementById('content-create').style.display='block'"
                style="width: auto">Tạo bỏ phiếu</button>    
                    <!-- ẩn -->
                    <div id="content-create" class="modal">
                    <span
                        onclick="document.getElementById('content-create').style.display='none'"
                        class="close"
                        title="Đóng"
                        >&times;</span
                    >
                    <!-- end ẩn -->
                    <form class="modal-content" action="../api/create.php" method="post">
                        <div class="container">
                        <h1>Tạo bỏ phiếu</h1>
                        <p>Điền thông tin bầu ban cán sự lớp</p>
                        <hr />

                        <label for="vote-name"><b>Tên cuộc bỏ phiếu</b></label>
                        <input
                            type="text"
                            placeholder="Nhập cuộc tên cuộc bỏ phiếu"
                            name="vote-name"
                            required
                        />

                        <div class="clearfix">
                            <button
                            type="button"
                            onclick="document.getElementById('content-create').style.display='none'"
                            class="cancelbtn"
                            >
                            Hủy bỏ
                            </button>
                            <button type="submit" class="create-vote">Tạo bỏ phiếu</button>
                        </div>
                        </div>
                    </form>
                    </div>
                    
            </div>
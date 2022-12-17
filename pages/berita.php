
<div class="container-fluid">
  <div class="container text-center">
    <div class="row">
      <div class="col-6">
        <form method="POST" action="">
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">ID</label>
            <input type="number" name="id" class="form-control" id="halamanID" placeholder="ID" required>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" required>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label"></label>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Berita</label>
              <textarea class="form-control" name="berita" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Berita" required></textarea>
            </div>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tanggal Post</label>
            <input type="date" name="tgl_post" class="form-control" id="tanggalPost" placeholder="" required>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" id="judul" placeholder="Judul" required>
          </div>
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>

      <div class="col-6">
        <div class="card text-center">
          <div class="card-header">
            ID
          </div>
          <div class="card-body">
            <h5 class="card-title">Judul</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          <div class="card-footer text-muted">
            <div class="row">
              <div class="col">
              date post
              </div>
              <div class="col"> author</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

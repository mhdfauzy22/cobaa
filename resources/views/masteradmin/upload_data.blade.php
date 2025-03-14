<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="modal-body">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" required >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" required>
        </div>

<!--         <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" required>
                <option value="" selected>Pilih Role</option>
    		<option value="masteradmin">masteradmin</option>
                <option value="usertoko">usertoko</option>
            </select>
        </div> -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>

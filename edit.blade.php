<h3> {{$judul}} </h3> 
<form action="{{ route('anggota.update', $edit->id) }}" method="post"> 
    @method('put') 
    @csrf 
    
    <label>Nama</label><br> 
    <input type="text" name="nama" value="{{ old('nama', $edit->nama) }}" 
        placeholder="Masukkan Nama Lengkap" class="form-control @error('nama') is-invalid @enderror"> 
    @error('nama') 
        <span class="invalid-feedback alert-danger" role="alert"> 
            {{$message}} 
        </span> 
    @enderror 

    <br><br> <!-- Added line break for spacing -->
    
    <label>HP</label><br> 
    <input type="text" name="hp" value="{{ old('hp', $edit->hp) }}" 
        placeholder="Masukkan Nomor HP" class="form-control @error('hp') is-invalid @enderror"> 
    @error('hp') 
        <span class="invalid-feedback alert-danger" role="alert"> 
            {{$message}} 
        </span> 
    @enderror 

    <br><br> <!-- Added line break for spacing -->
    
    <button type="submit" class="btn btn-primary">Perbaharui</button>
</form>

<!-- Cancel button outside the form for better user experience -->
<a href="{{ route('anggota.index') }}">
    <button type="button" class="btn btn-secondary">Batal</button>
</a>


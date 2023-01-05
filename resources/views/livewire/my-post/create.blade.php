<div>
    <h1>Create Post</h1>
    <div class="card offset-5" id="post-create">
        
    @if (session('message'))
        <div class="alert alert-success mt-2 text-center">{{ session('message') }}</div>
    @endif
        <div class="card-header">
            <h5 class="text-center mt-3">Select Status</h5>
            <select name="category" id="select-cat" class="text-center" wire:model.defer="category">
                <option hidden="true">Status</option>
                <option selected disabled>Feeling Sad</option>
                <option value="drama">Feeling Happy</option>
                <option value="action">Feeling Excited</option>
                <option value="sweet">Feeling Drowsy</option>
                <option value="comedy">Feeling Scared</option>
                <option value="horror">Feeling Exhausted</option>
            </select>
                @error('category')
                    <p class="text-danger text-center">{{ $message }}</p>
                @enderror
        </div>
        <div class="card-body">
            <textarea name="remarks" id="" cols="55" rows="5" wire:model.defer="remarks"></textarea>
        </div>
        
            @error('remarks')
                <p class="text-danger text-center">{{ $message }}</p>
            @enderror
        <button class="btn btn-primary" wire:click="addPost()">Post</button>
    </div>
</div>


<style>
    #post-create {
        width: 470px;
    }
    #select-cat {
        width: 120px;
        height: 50px;
        margin-left: 37%;
    }
</style>
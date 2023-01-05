<div>
    <div class="card border border-light">
        <div class="card-header bg-info">
            <h3 class="mt-2">Add User</h3>
        </div>
        <div class="card-body shadow">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="car_name">
                <label for="car_name">User Name</label>
                @error('car_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="car_brand">
                <label for="car_brand">User <Address></Address></label>
                @error('car_brand')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="price">
                <label for="price">Age</label>
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
</div>
                <div class="form-floating mb-3">
                    <select name="color" class="form-select" wire:model.defer="color">
                        <option hidden="true">Select Country</option>
                        <option selected disabled>Select Country</option>
                        <option value="black">Philippines</option>
                        <option value="white">China</option>
                        <option value="blue">Japan</option>
                        <option value="yellow">Singapore</option>
                        <option value="red">Yemen</option>
                        <option value="pink">Libya</option>
                    </select>
                    <label for="color">Origin</label>
                    @error('color')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" wire:click="addCar()">
                    Add User
                </button>
            </div>
        </div>
    </div>
</div>

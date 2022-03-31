

<div class="row g-5">
    <center>
        <h1>Add student</h1>
        <div class="col-6">
            <!-- Aquí empieza el formulario -->
            <form class="needs-validation">
                <div class="row g-3">

                    <div class="col-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Example: Anna Elizabeth Blake"
                            wire:model="name" required>
                        <div class="invalid-feedback">
                            This field can't be left empty
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" placeholder="Example: 16"
                            wire:model="age" required>
                        <div class="invalid-feedback">
                            This field can't be left empty
                        </div>
                    </div>

                <hr class="my-4" />
                <button class="w-100 btn btn-dark btn-lg" type="submit" wire:click="store()">Save data</button>
            </form>
        

            <!-- final del formulario -->
            <hr class="my-4" />
        </div>
    </center>
</div>

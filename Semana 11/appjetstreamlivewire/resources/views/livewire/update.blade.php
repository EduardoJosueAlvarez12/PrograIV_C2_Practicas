<div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
    <form class="needs-validation">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="">
                <div class="mb-4">
                    <label for="name"
                        class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" placeholder="Enter Name" wire:model="name" required>
                </div>
                <div class="mb-4">
                    <label for="age"
                        class="block text-gray-700 text-sm font-bold mb-2">Age</label>
                    <input type="number"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="age" placeholder="Enter Name" wire:model="age" required>
                </div>                    
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <span>
                <button wire:click.prevent="store()" type="button"
                    class="btn btn-success">
                    Save
                </button>
            </span>
            <span>
                <button wire:click="closeModalPopover()" type="button"
                    class="btn btn-danger">
                    Close
                </button>
            </span>
        </div>
    </form>
</div>
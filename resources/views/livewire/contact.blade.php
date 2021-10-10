<div>
    <section class="container">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3>Contact Form</h3>
                </div>
                <div class="card-body">
                    <form  wire:submit.prevent="submitForm">
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" name="name" id="" class="form-control" wire:model="name">
                            @error('name')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="mail">Mail</label>
                            <input type="email" name="mail" id="" class="form-control" wire:model="email">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Phone</label>
                            <input type="text" name="phone" id="" class="form-control" wire:model="phone">
                            @error('phone')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <br>
                        <div class="form-froup">
                            <label for="msg">Message</label>
                            <textarea name="message" id="" class="form-control" wire:model="msg">

                            </textarea>
                            @error('msg')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <input type="submit" value="submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

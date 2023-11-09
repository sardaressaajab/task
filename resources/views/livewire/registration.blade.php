<div class="container" style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f0f0f0; flex-direction: column;">
    <div style="margin-bottom: 20px;">
        <button wire:click="redirectToList" class="btn btn-primary" style="padding: 10px 20px;">Fetch All Students List</button>
    </div>
    <div class="form-container" style="max-width: 400px; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; color: #333;">Students Registration</h1>
        <form wire:submit.prevent="submit">
            <div class="form-group">
                <label for="name" style="font-weight: bold;">Name:</label><br>
                <input type="text" id="name" placeholder="Name" wire:model="name" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                @error('name') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="email" style="font-weight: bold;">Email:</label><br>
                <input type="text" id="email" placeholder="Email" wire:model="email" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                @error('email') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="password" style="font-weight: bold;">Password:</label><br>
                <input type="password" id="password" placeholder="Password" wire:model="password" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                @error('password') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="notes" style="font-weight: bold;">Notes:</label><br>
                <input type="text" id="notes" placeholder="notes" wire:model="notes" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                @error('notes') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="dob" style="font-weight: bold;">Date Of Birth:</label><br>
                <input type="date" id="dob" placeholder="Date Of Birth" wire:model="dob" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                @error('dob') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label style="font-weight: bold;">Courses:</label><br>
                <label style="display: block; margin-bottom: 5px;"><input type="checkbox" wire:model="courses.0" value="course1"> Course 1</label>
                <label style="display: block; margin-bottom: 5px;"><input type="checkbox" wire:model="courses.1" value="course2"> Course 2</label>
                <label style="display: block; margin-bottom: 5px;"><input type="checkbox" wire:model="courses.2" value="course3"> Course 3</label>
                <label style="display: block; margin-bottom: 5px;"><input type="checkbox" wire:model="courses.3" value="course4"> Course 4</label>
                <label style="display: block; margin-bottom: 5px;"><input type="checkbox" wire:model="courses.4" value="course5"> Course 5</label>
            </div>

             <button type="submit" style="background-color: #4caf50; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Submit</button>
            @if (session() ->has('success'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            <div style="color: green ,padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">{{session('success')}}</div>
            @endif    
        </form>
    </div>
    
</div>

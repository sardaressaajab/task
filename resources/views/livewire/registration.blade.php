<div>
    <H1>Students Registration</H1>
    <form wire::submit.prevent='submit'>
        <label>Name:</label>
        <br>
        <input type="text"  placeholder="name" wire::model="name">
        @error('name')<span class='error'>{{$message}}</span> @enderror
        <br><br>
        <input type="text" wire::model="email" placeholder="Email">
        @error('email'){{message}}@enderror
        <br><br>
        <input type="password" wire::model="password" placeholder="password">
        <br><br>
        <input type="date" wire::model="dob" placeholder="Date Of Birth">
        <br><br> 
        <label>
        <input name="Courses[]" value="course" type="checkbox">
        course
        </label>
        <br>
        <label>
        <input name="Courses[]" value="course" type="checkbox">
        course
        </label><br>
        <label>
        <input name="Courses[]" value="course" type="checkbox">
        course
        </label><br>
        <label>
        <input name="Courses[]" value="course" type="checkbox">
        course
        </label><br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


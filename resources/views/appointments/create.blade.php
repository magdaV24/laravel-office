@extends("display.display")

@section("content")
            <main>
            <section class="section1">
                <img src="https://images.pexels.com/photos/699459/pexels-photo-699459.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="image">
                <div class="credit">
                    <p>Photo credit: <a href="https://www.pexels.com/@flodahm/">Flo Dahm</a></p>
                </div>
            </section>

            <section class="section2">

                @if(session('message'))
                <div class="message-box">
                    <p class='message'>{{ session('message') }}</p>
                </div>
                @endif
                <form action="/appointments" method="POST">
                    @csrf
                        <div class='form-wrapper'>
                        <div class="col1">
                        <label>
                            <input type="text" id="first-name" required name="first-name"/>
                            <span>First Name</span>
                        </label>
                        <label>
                            <input type="text" id="last-name" required name="last-name"/>
                            <span>Last Name</span>
                        </label>
                    <label>
                            <input type="email" id="email" required name="email"/>
                            <span>Email</span>
                            <small></small>
                        </label>
                        <label>
                            <input type="text" id="phone-number" required name="phone-number"/>
                            <span>Phone Number</span>
                        </label>
                        <label>
                            <input type="text" id="address" required name="address"/>
                            <span>Address</span>
                        </label>
                        </div>
                        <div class="col2">
                        <label>
                            <input type="date" id="date" required name="date"/>
                        </label>
                        <fieldset>
                            <h3>Pick an hour slot:</h3>

                            <div class="radio-field">
                                <input type="radio" name="slot" value=1 class="radio-input">
                                9:00 - 10:00
                            </div>
                            <div class="radio-field">
                                <input type="radio" name="slot" value=2 class="radio-input">
                                10:30 - 11:30
                            </div>
                            <div class="radio-field">
                                <input type="radio" name="slot" value=3 class="radio-input">
                                12:00 - 13:00
                            </div>
                            <div class="radio-field">
                                <input type="radio" name="slot" value=4 class="radio-input">
                                15:30 - 16:30
                            </div>
                            <div class="radio-field">
                                <input type="radio" name="slot" value=5 class="radio-input">
                                17:00 - 18:00
                            </div>
                            <div class="radio-field">
                                <input type="radio" name="slot" value=6 class="radio-input">
                                18:30 - 19:30
                            </div>
                            <div class="radio-field">
                                <input type="radio" name="slot" value=7 class="radio-input">
                                20:00 - 21:00
                            </div>
                        </fieldset>
                        </div>
                        </div>
                    <input class="btn" type="submit" value="Check if the date and hour slot are available!"/>
                </form>
            </section>
            </main>
@endsection

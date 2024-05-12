<section id="book-a-table" class="book-a-table">
    <div class="container">

        <div class="section-title">
            <h2>Book a <span>Table</span></h2>
            <p>Book a table and make sure you get a table when you get there!!</p>
        </div>

        <form action="{{ url('/booktable') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                        value="{{ auth()->user() ? auth()->user()->name : '' }}" required>
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                        value="{{ auth()->user() ? auth()->user()->email : '' }}" required>
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                        value="{{ auth()->user() ? auth()->user()->mobile_no : '' }}" required>
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="date" name="date" class="form-control" id="date" required>
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="time" class="form-control" name="time" id="time" placeholder="Time"
                        required>
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="people" id="people"
                        placeholder="Number of people" required>
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div><br>
            <!-- <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div> -->
            <div class="text-center"><button type="submit">Submit</button></div>
        </form>

    </div>
</section>

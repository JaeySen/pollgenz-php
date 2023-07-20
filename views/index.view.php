<div id="banner" class="jumbotron text-center">
  <div class="display-4 mb-4">Create a Poll in Seconds!</div>
  <div class="container-form p-4" id="form">
    <div class="flipper">
      <div class="front">
        <form id="poll-form">
          <div class="form-group">
            <input type="text" class="form-control" id="question" placeholder="Type your question here">
          </div>
          <hr class="divider">
          <div class="poll-answers overflow-auto">
                <div class="form-group">
                  <input type="text" class="form-control" id="answer1" placeholder="Type your answer here">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="answer2">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="answer3">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="answer4">
                </div>
          </div>    
        </form>

        <div class="container pt-3 px-0 d-flex justify-content-between">
          <a class="btn shiny grow btn-custom-red" id="more" href="#" role="button">More answer</a>
          <button type="submit" class="btn submit shiny grow" disabled>Create poll</button>
        </div>
      </div>

      <div class="back">
        <div class="row">
          <div class="col-11">
            <!-- <label for="link">Link to poll: </label> -->
            <input class="form-control" type="text" placeholder="Readonly input here..." readonly>

          </div>
          <div class="col-1">
          <a class="btn btn-outline-dark" href="#" role="button"><i class="far fa-copy"></i></a>

          </div>
        </div>

        <div class="container pt-3 pl-3">          
          <div class="row align-self-end justify-content-between">
            <a class="btn shiny grow btn-custom-red" onclick="presentPoll()" role="button">See Poll</a>
            <a class="btn submit flip-back shiny grow" id="reset" href="#" role="button">New poll</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- <div class="flip-container container-form">
    <div class="flipper">
      <div class="front">

      </div>

      <div class="back">

      </div>
    </div>
  </div> -->
</div>





<template>
  <form action="/register" method="post" id="registerForm">
    <h3 slot="title">Register</h3>
    <!-- Begin Step -->
    <div class="step-app">
      <!-- step nav -->

      <!-- TODO: Review implemenation of steps tabs. It may be wrongly view as a choice instead of progress -->
      <ul class="step-steps">
        <li><a href="#step1">Step 1 - Enter</a></li>
        <li><a href="#step2">Step 2 - Verify</a></li>
      </ul>
      <!-- end step nav -->
      <!-- step content -->
      <div class="step-content">
        <step-1></step-1>
        <step-2></step-2>
      </div>
      <!-- end step content -->
      <div class="step-footer">
        <button data-direction="prev" class="button">Previous</button>
        <button data-direction="next" class="button">Confirm</button>
        <button data-direction="finish" type="submit" class="button">Register</button>
      </div>
    </div>
    <!-- end step -->

  </form>
</template>

<script>
import StepOne from './Step1';
import StepTwo from './Step2';

export default {
  components: {
    'step-1': StepOne,
    'step-2': StepTwo,
  },
  mounted() {
    $('.step-app').steps({
      onFinish() {
        $('#registerForm').submit();
      },
      onChange(currentIndex, newIndex, stepDirection) {
        if (currentIndex === 0 && stepDirection === 'forward') {
          const mobile = $('#js-reg-mobile').val();

          // TODO: Append +65 here or at controller
          axios.post('/otp/send', { mobile })
            .then((response) => {
              console.log(response);
            })
            .catch((response) => {
              console.log(response);
            });
        }
        return true;
      }
    });
  }
};
</script>

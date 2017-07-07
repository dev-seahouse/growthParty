<template>
  <form action="/register" method="post">
    <h3>Register</h3>
    <component
      :is="stepView"
      :detail="detail"
      @prev="executePrev"
      @next="executeNext">
    </component>
  </form>
</template>

<script>
import StepOne from './Step1';
import StepTwo from './Step2';

const components = {
  'step-1': StepOne,
  'step-2': StepTwo,
};
const componentsCount = Object.keys(components).length;
let formParsley;

export default {
  components,
  computed: {
    stepView() {
      return `step-${this.currentStep}`;
    },
  },
  data() {
    return {
      currentStep: 1,
      detail: {},
    };
  },
  methods: {
    executePrev() {
      if (this.currentStep > 1) {
        this.currentStep--;
      }
    },
    executeNext(response) {
      formParsley.whenValidate()
        .then(() => {
          const result = (typeof response === 'function') ? response() : response;
          if (result) {
            // Merge result
            Object.keys(result).forEach((key) => {
              this.detail[key] = result[key];
            });

            if (this.currentStep < componentsCount) {
              // Move to next section
              this.currentStep++;
              formParsley = $(this.$el).parsley();


            } else {
              axios.post('/register', this.detail)
                .then(function(res){
                  console.log(res);
                  // if registration sucessful please redirect to /dashboard
                  // if not sucessful, please show error message, demo is inside login.vue  + login controller. there is also a regex to validate singapore number e.g starting with +98 not +12
                })
                .catch(console.log);
            }
          }
        });
    },
  },
  mounted() {
    formParsley = $(this.$el).parsley();
  }
};
</script>

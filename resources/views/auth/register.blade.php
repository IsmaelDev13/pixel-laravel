<x>
  <x-page-heading >Register</x-page-heading>
  <x-forms.form method="POST" action="/register" enctype="mutipart/form-data">

  <x-forms.input label="Your Name" name="name"></x-forms.input>
  <x-forms.input label="Email" type="email" name="email"></x-forms.input>
  <x-forms.input label="Password" type="password" name="password"></x-forms.input>
  <x-forms.input label="Confirm Password" type="password" name="password"></x-forms.input>
  <x-forms.divider/>
  <x-forms label="Employer Name" name="employer"></x-forms>
  <x-forms label="Employer Logo" name="logo" type="file"></x-forms>
<x-forms.button>
  Create Account
</x-forms.button>
  </x-forms.form>
</x>
<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Job Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$50,000 USD" />
        <x-forms.input label="Location" name="location"  placeholder="New York, NY" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com" />

        <x-forms.checkbox label="Featured (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (coma separated)" name="tags" placeholder="laracasts, video, education" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>

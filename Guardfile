guard 'phpunit', :tests_path => 'tests', :cli => '--colors' do
  # Watch tests files
  watch(%r{^.+Test\.php$})

  # Watch library files and run their tests
  watch(%r{^Object/(.+)\.php}) { |m| "Tests/#{m[1]}Test.php" }
end

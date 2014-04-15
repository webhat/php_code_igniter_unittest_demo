source 'https://rubygems.org'

if RUBY_VERSION =~ /1.9/
	Encoding.default_external = Encoding::UTF_8
	Encoding.default_internal = Encoding::UTF_8
end

gem 'libnotify', :require => RUBY_PLATFORM.include?('linux') && 'rb-inotify'
gem 'growl', :require => RUBY_PLATFORM.include?('darwin') && 'growl'

gem 'guard'
gem 'guard-phpunit'
gem 'bundler'

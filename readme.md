## Comment system

A proposal for a simple comment system builded in Laravel:

- Only name and comment are required fields (Completed)
- Page should not refresh when posting a comment (Building)
- Commenters can write a reply to other comments (Completed)
- Maximum of 3 levels in nested comments (Completed)
- Comments (within in the same level) should be ordered by post date (Completed)
- Should filter out malicious text that could result in a security vulnerability (Completed)
- Doesn't need to be beautiful but also shouldn't make our eyes hurt (Completed)
- edit, delete, moderation, login (future implementation)


## Instructions
- Refer to [Laravel Documentation](https://laravel.com/docs/5.6#server-requirements) to a properly Laravel installation
- Clone the repository
- Configure the .env file and define the variable "MAX_NESTED = 3" with the maximum number of nested comments allowed (default 2)
- Run the migration

## Security Vulnerabilities

If you discover a security vulnerability, please send an e-mail to Sandro Aguilar via [sandro.aguilar.p@gmail.com](mailto:sandro.aguilar.p@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Comment sytem is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
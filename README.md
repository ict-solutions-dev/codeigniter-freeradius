# Codeigniter FreeRADIUS

The CodeIgniter FreeRADIUS library provides a suite of tools designed to manage and interact with a FreeRADIUS server through the CodeIgniter framework. It offers functionality for database handling, configuring FreeRADIUS tables, manipulating username realms and characteristics, modifying PPPoE group settings, and managing IP ranges for Carrier-Grade NAT (CGNAT). This library significantly simplifies the process of working with a FreeRADIUS server by offering pre-defined and easily configurable settings.

Moreover, its seamless integration with the CodeIgniter framework makes it an exemplary toolset for developers requiring remote authentication and accounting in their PHP applications. This allows developers to focus more on their application's core features, assured in the knowledge that their FreeRADIUS server interaction is handled proficiently by this library.

![PHP](https://img.shields.io/badge/PHP-%5E8.1-blue)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-%5E4.3-blue)

## Installation

Installation is done through Composer.

```console
composer require ictsolutions/codeigniter-freeradius
```
## Configuration


Tables: The FreeRADIUS tables are named as radacct, radcheck, radgroupcheck, radgroupreply, radreply, radusergroup, radpostauth, nas, nasreload, and userinfo. These are typically created when installing and configuring a FreeRADIUS server and are used to manage RADIUS accounts, user groups, authentication, and servers.

usernameRealm: The realm that's used to construct usernames is set to null by default, meaning that there's no realm added to the username.

usernameCharacters & usernameLength: Usernames are generated using the characters '0-9' and 'A-Z' and they have a length of 6 characters.

passwordCharacters & passwordLength: Passwords are generated using the characters '0-9' and 'A-Z' and they have a length of 12 characters.

pppoeGroupName & pppoeGroupPriority: The default Point-to-Point Protocol over Ethernet (PPPoE) group name is 'PPPoE' and it has a priority of 0.

ipStart & ipEnd: The IP address range for Carrier-Grade NAT (CGNAT) starts from '100.64.0.0' to '100.64.63.255'.

## Enumerations

### Attribute Enumeration

The Attribute enumeration consists of the following Enums, representing different RADIUS protocol attributes that can be used within this CodeIgniter FreeRADIUS Library:

```php
namespace IctSolutions\CodeIgniterFreeRadius\Enums;

enum Attribute: string
{
    case CleartextPassword = 'Cleartext-Password';
    case FallThrough = 'Fall-Through';
    case SimultaneousUse = 'Simultaneous-Use';
    case ServiceType = 'Service-Type';
    case FramedIPAddress = 'Framed-IP-Address';
    case FramedIPNetmask = 'Framed-IP-Netmask';
    case FramedProtocol = 'Framed-Protocol';
    case FramedMTU = 'Framed-MTU';
    case CiscoAVPair = 'Cisco-AVPair';
    case CiscoNASPort = 'Cisco-NAS-Port';
    case CiscoFramedRoute = 'Cisco-Framed-Route';
}
```

Each Enum accompanies a comment, describing its purpose or function in the RADIUS protocol.

### Operator Enumeration

The Operator enumeration consists of different operators that can be applied to the CodeIgniter FreeRADIUS Library attributes:

```php
namespace IctSolutions\CodeIgniterFreeRadius\Enums;

enum Operator: string
{
    case Equals = '=';
    case Assign = ':=';
    case Check = '==';
    case Add = '+=';
    case NotEquals = '!=';
    case Greater = '>';
    case GreaterEquals = '>=';
    case Less = '<';
    case LessEquals = '<=';
    case Matches = '=~';
    case NotMatches = '!~';
    case Exists = '=*';
    case NotExists = '!*';
}
```

Each Enum is annotated with a comment, providing additional insights into the use of operators with attributes in RADIUS protocol.

## Usage

### Initialization

Instantiate your FreeRADIUS library using the provided services class. The CodeIgniter's service class provides a unified and direct way to access the library.
```php
$freeRadiusLibrary = \IctSolutions\CodeIgniterFreeRadius\Config\Services::freeradius();
```

### Bind A User

For example, if you want to bind a user with an attribute 'FramedIPAddress' in the RADIUS server:
```php
use IctSolutions\CodeIgniterFreeRadius\Enums\Operator;
use IctSolutions\CodeIgniterFreeRadius\Enums\Attribute;

// ... ...

$attributeValue = '192.0.2.1'; // Provided framed IP address for the user
$freeRadiusLibrary->bindUser(Attribute::FramedIPAddress, Operator::Equals, $attributeValue);
```
This will bind the user to the provided IP address using the RADIUS protocol attribute for framed IP.

### Check User's Binding

You can also check the user's binding status:
```php
$status = $freeRadiusLibrary->checkUserBinding(Attribute::FramedIPAddress, $attributeValue);
```
This method will check if the user has the 'Framed-IPAddress' correctly bound with the provided value.

### Other Features

There are other features that allow you to work with FreeRADIUS server's advanced configurations. Set fall-through behavior, allow simultaneous logins, set service type, and other configurations via a simple syntax:
```php
$config = [
    Attribute::FallThrough => ['operator' => Operator::NotEquals, 'value' => 'YES'],
    Attribute::SimultaneousUse => ['operator' => Operator::LessEquals, 'value' => 1],
    Attribute::ServiceType => ['operator' => Operator::Equals, 'value' => 'Framed-User'],
];

$freeRadiusLibrary->applyConfigs($config);
```
This will configure the FreeRADIUS server to not allow fall-through, limit simultaneous logins to one, and set the service type to 'Framed-User'.

Please note that for actual deployment, all attribute value, operator, user details etc. should be carefully managed and sanitized.

## Example: Creating a CodeIgniter Project with FreeRADIUS

### Step 1: Create New CodeIgniter Project

Start by creating a new CodeIgniter project if you haven't already. You can initiate a project using Composer:
```shell
composer create-project codeigniter4/appstarter myProject
```
Navigate to the newly created project:
```shell
cd myProject
```

### Step 2: Install CodeIgniter FreeRADIUS library

Add the FreeRADIUS library to your project:
```shell
composer require ictsolutions/codeigniter-freeradius
```

### Step 3: Run the Migration

Now you can run your migration. This will create the necessary tables in your database for the FreeRADIUS to work:
```shell
php spark migrate
```
Check your database to verify that the tables were created.

### Step 5: Using the Library in Your Code

After the setup, you can utilize the FreeRadius library in the CodeIgniter project. For example, in your controller:
```php
use IctSolutions\CodeIgniterFreeRadius\Enums\Attribute;
use IctSolutions\CodeIgniterFreeRadius\Enums\Operator;

public function index(){
    $freeRadius = \IctSolutions\CodeIgniterFreeRadius\Config\Services::freeradius();

    // Let's bind a user 'john' with a Cleartext-Password
    $freeRadius->bindUser('john', Attribute::CleartextPassword, Operator::Equals, 'JohnsPassword123');
}
```
Please, ensure you replace 'JohnsPassword123' with a safe and hashed version of the password in a real-life scenario.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

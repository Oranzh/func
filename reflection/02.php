<?php

class foo {
    public static function bar() {
        return __METHOD__;
    }
}

function directCall() {
    return foo::bar($_SERVER['REQUEST_TIME']);
}

function variableCall() {
    return call_user_func(array('foo', 'bar'), $_SERVER['REQUEST_TIME']);
}

function reflectedCall() {
    return (new ReflectionMethod('foo', 'bar'))->invoke(null, $_SERVER['REQUEST_TIME']);
}

print_r(Benchmark(array('directCall'),2,true));

function Benchmark($callbacks, $iterations = 100, $relative = false)
{
    set_time_limit(0);

    if (count($callbacks = array_filter((array) $callbacks, 'is_callable')) > 0)
    {
        $result = array_fill_keys($callbacks, 0);
		var_dump($result);
        $arguments = array_slice(func_get_args(), 3);
		var_dump($arguments);

        for ($i = 0; $i < $iterations; ++$i)
        {
            foreach ($result as $key => $value)
            {
                $value = microtime(true);
                call_user_func_array($key, $arguments);
                $result[$key] += microtime(true) - $value;
            }
        }

		var_dump($result);
        asort($result, SORT_NUMERIC);

        foreach (array_reverse($result) as $key => $value)
        {
            if ($relative === true)
            {
                $value /= reset($result);
            }

            $result[$key] = number_format($value, 8, '.', '');
        }

        return $result;
    }

    return false;
}

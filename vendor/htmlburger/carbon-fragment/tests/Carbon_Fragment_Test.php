<?php
/*
 * Two files have to be present in theme/fragments for this test to work:
 * test-1.php: value of $testFragment1
 * test-2.php: value of $testFragment2
 */
class Carbon_Fragment_Test extends WP_UnitTestCase {
    private $fragment = null;
    private $testFragment1 = 'Test fragment 1.';
    private $testFragment2 = 'Test fragment 2.';

    function test_constructor_SingleFragment_Found() {
        $fragment = new Carbon_Fragment('test-1');
        
        // an exception is thrown on failure so we just assert true
        $this->assertTrue(true);
    }

    function test_constructor_SingleFragmentWithDirectory_Found() {
        $fragment = new Carbon_Fragment('fragments/test-1');
        $fragment = new Carbon_Fragment('/fragments/test-1');
        
        // an exception is thrown on failure so we just assert true
        $this->assertTrue(true);
    }

    function test_constructor_SingleFragmentWithExtension_Found() {
        $fragment = new Carbon_Fragment('test-1.php');
        
        // an exception is thrown on failure so we just assert true
        $this->assertTrue(true);
    }

    /**
     * @expectedException     Carbon_Fragment_Exception
     * @expectedExceptionCode 1
     */
    function test_constructor_SingleFragment_NotFound() {
        $fragment = new Carbon_Fragment('nonexistant-1');
    }

    function test_constructor_MultipleFragments_Found() {
        $fragment = new Carbon_Fragment(array('test-2', 'test-1'));
        
        // an exception is thrown on failure so we just assert true
        $this->assertTrue(true);
    }

    function test_constructor_MultipleFragments_SecondFragmentHTML() {
        $html = Carbon_Fragment::create(array('test-2', 'test-1'))->get();
        $expected_html = $this->testFragment2;

        // an exception is thrown on failure so we just assert true
        $this->assertEquals($expected_html, $html);
    }

    /**
     * @expectedException     Carbon_Fragment_Exception
     * @expectedExceptionCode 1
     */
    function test_constructor_MultipleFragments_NotFound() {
        $fragment = new Carbon_Fragment(array('nonexistant-2', 'nonexistant-1'));
    }

    function test_constructor_MultipleFragments_FallbackFound() {
        $fragment = new Carbon_Fragment(array('nonexistant-1', 'test-1'));
        
        // an exception is thrown on failure so we just assert true
        $this->assertTrue(true);
    }

    function test_constructor_CorrectContext_NoException() {
        $fragment = new Carbon_Fragment('test-1', array(
            'foo'=>'bar',
            'bar'=>'foo',
        ));

        // an exception is thrown on failure so we just assert true
        $this->assertTrue(true);
    }

    /**
     * @expectedException     Carbon_Fragment_Exception
     * @expectedExceptionCode 2
     */
    function test_constructor_IncorrectContext_Exception() {
        $fragment = new Carbon_Fragment('test-1', new stdClass());
    }

    function test_cache() {
        $fragment = Carbon_Fragment::create('test-1')->cache(1);
        $html = $fragment->get();

        $expected_html = $this->testFragment1;
        $cache_key = $fragment->get_cache_key(locate_template('fragments/test-1.php'), array());
        $cache_html = get_transient($cache_key);

        $this->assertNotEquals(false, $cache_html, 'Transient is invalid/expired');
        $this->assertEquals($expected_html, $html, 'Returned html is not the expected one');
    }

    function test_purge_cache() {
        $fragment = Carbon_Fragment::create('test-1')->cache(1);
        $html = $fragment->get();
        $fragment->purge_cache();

        $cache_key = $fragment->get_cache_key(locate_template('fragments/test-1.php'), array());
        $cache_html = get_transient($cache_key);

        $this->assertEquals(false, $cache_html, 'Transient has not been deleted');
    }

    function test_get() {
        $html = Carbon_Fragment::create('test-1')->cache(1)->get();
        $expected_html = $this->testFragment1;
        $this->assertEquals($expected_html, $html, 'Returned html is not the expected one');
    }

    function test_render() {
        $expected_html = $this->testFragment1;
        ob_start();
        Carbon_Fragment::create('test-1')->cache(1)->render();
        $html = ob_get_clean();
        $this->assertEquals($expected_html, $html, 'Echoed html is not the expected one');
    }

}
